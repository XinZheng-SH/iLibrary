<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iLibrary</title>

	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
<!--	<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>-->
</head>
<body>
	<header>
		<nav class="navbar navbar-light bg-white">
			<!--redirect back to default homepage-->
			<a class="navbar-brand" href="<?php echo site_url()?>">
			</a>
			<div id="nav-search">
				<form>
					<div class="col-xs-8">
						<div class="input-group">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="input-group-btn">
									<button class="btn btn-danger" type="submit">
										Search
									</button>
								</span>
						</div>
					</div>
				</form>
			</div>
				<a href="<?php echo base_url('Radar/view') ?>">
				<!--					Button trigger for radar -->
					<button type="button" class="btn btn-success" >Radar</button>
				</a>
				<a href="<?php echo base_url('Radar/test') ?>">
					<!--					Button trigger for radar -->
					<button type="button" class="btn btn-success" >Test</button>
				</a>

		</nav>
	</header>


