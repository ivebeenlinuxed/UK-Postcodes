$(document).ready(function() {
	$("#location").keyup(function() {
		if (this.to != undefined) {
			clearTimeout(this.to);
		}
		if ($("#location").val() != "") {
			this.to = setTimeout(checkLocation, 1000);
		}
		resetLocation();
	});
	
	$("#pcode_tab").click(function() {
		$("#search_type").val(2);
	});
	
	$("#latlng_tab, #google_tab").click(function() {
		$("#search_type").val(1);
	});
	
	geocoder = new google.maps.Geocoder();
});

function resetLocation() {
	console.log("RESET LOCATION");
	$("#location").parent().removeClass("error").removeClass("success");
	$('#location').tooltip({trigger: "manual", delay: 0});
	$("#location").data("tooltip").options.title = "Type something then please wait...";
	$('#location').tooltip("show");
}

function checkLocation() {
	console.log("CHECK LOCATION");
	geocoder.geocode({address: $("#location").val(), region: "UK"}, function(result, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			$("#location").parent().addClass("success");
			r = result[0];
			$('#location').tooltip({trigger: "manual", delay: 0});
			$("#location").data("tooltip").options.title = r.formatted_address;
			$('#location').tooltip("show");
			
			$("#search_lat").val(r.geometry.location.lat());
			$("#search_lng").val(r.geometry.location.lng());
			
			
			console.log("OK");
		} else {
			$("#location").parent().addClass("error");
			$('#location').tooltip({trigger: "manual", title: "Oops! We cannot currently find where you mean..."}).tooltip("show");
			console.log("GEOCODE ERROR: "+status);
		}
	});
}

