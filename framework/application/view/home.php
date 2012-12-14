<?php 
\Core\Router::loadView("template/top");
global $controller;
?>
<!-- 
<div class="navbar navbar-static-top" id="menubar">
  <div class="navbar-inner">
    <a class="brand" href="#">Title</a>
    <ul class="nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
  </div>
</div> -->
<div class="container-fluid">
	<form class="modal" action="/" method="post">
		<div class="modal-header">
			<h3>Where Are You?</h3>
		</div>
		<div class="modal-body">
			<?php 
			foreach ($controller->errors as $error) {
				?>
				<div class="alert alert-danger"><strong><?php echo $error[0] ?></strong> <?php echo $error[1] ?></div>
				<?php
			}
			?>
			<input type="hidden" id="search_type" name="type" value="2" />
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<!-- <li><a href="#google" id="google_tab"
						data-toggle="tab">Find Me</a></li> -->
					<li class="active"><a href="#pcode" id="pcode_tab" data-toggle="tab">Postcode</a>
					</li>
					<li><a href="#latlng" id="latlng_tab" data-toggle="tab">Lat/Lng</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="google">
						Type in something that identifies your location: <input
							type="text" id="location" placeholder="Lichfield, Staffordshire" /><br />
						<small>This is provided by Google Maps</small>
					</div>
					<div class="tab-pane active" id="pcode">
						<input type="text" name="postcode" placeholder="WS15 4JJ" /><br />
						<small>This is provided by UK-Postcode API via CodePoint</small>
					</div>
					<div class="tab-pane" id="latlng">
						<input type="text" name="lat" placeholder="lat" id="search_lat"
							class="span2" />, <input type="text" name="lng" placeholder="lng"
							id="search_lng" class="span2" /> <br /> <small>This is provided
							by UK-Postcode API</small>
					</div>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<input type="submit" class="pull-right btn btn-primary"
				value="Search" />
		</div>
	</form>
</div>
<?php 
\Core\Router::loadView("template/bottom");
?>