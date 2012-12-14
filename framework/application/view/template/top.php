<!DOCTYPE html>
<html lang="en">
<head>
<title>UK-Postcodes</title>
<link rel="stylesheet" type="text/css"
	href="/plugins/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<link rel="stylesheet" type="text/css"
	href="/plugins/bootstrap/css/bootstrap-reponsive.css" />
<link rel="stylesheet" type="text/css"
	href="http://www.bcslichfield.com/wp-content/themes/bcs_theme/style.css" />
<script type="text/javascript"
	src="https://www.google.com/jsapi?key=AIzaSyC74oP0zrh5SvDWO0ycBeg8dmGsmOlQDdg"></script>
<script type="text/javascript">
	google.load("chrome-frame", "1.0.2");
	google.load("maps", "3", {
		other_params: "sensor=true"
	});
	</script>
	
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>

</head>
<body>
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- <div class="btn btn-navbar" data-toggle="collapase" data-target=".nav-collapase">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div> -->
				<a class="brand" href="http://www.bluelightstudios.co.uk">Bluelight
					Studios</a>
				<!-- <div class="nav-collapse"> -->
				<ul class="nav">
					<li><a href="http://www.bluelightstudios.co.uk">About Us</a></li>
					<li><a href="#">Local Data</a></li>
				</ul>
				
				<!-- </div> -->
			</div>
		</div>
	</div>
	<div id="page_head">
		<div class="container-fluid">
			<div id="page-header">
				<h1>
					<?php 
					if (!isset($title)) {
						?>
					<span>UK-Postcodes</span>
					<?php
					} else {
						echo $title;
				} ?>
					<small><?php
					if (!isset($subtitle)) {
						?>An Open Source Project<?php
					} else {
						echo $subtitle;
					}
					?> </small>
				</h1>
			</div>
		</div>
	</div>