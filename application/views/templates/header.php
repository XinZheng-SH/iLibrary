<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iLibrary</title>


	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
	<script src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
	<script src="https://unpkg.com/@popperjs/core@2" type="text/javascript"></script>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>" type="module"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>" type="text/javascript"></script>
</head>
<body>
	<header>

		<nav class="navbar navbar-light bg-white" style="justify-content: space-evenly;height: 80px">
<!--			redirect back to default homepage-->
			<a class="navbar-brand logo" href="<?php echo site_url()?>"></a>
				<a href="<?php echo base_url('Radar/view') ?>">
<!--									Button trigger for radar-->
					<button type="button" class="btn btn-success btnOnePointFive darkYellow"  >Radar</button>
				</a>

				<a href="<?php echo base_url('game/index') ?>">
<!--										Button trigger for radar-->
					<button type="button" class="btn btn-success btnOnePointFive"  >Game</button>
				</a>
			<a href="<?php echo base_url('Home/book') ?>">
				<!--	Button for Book-->
				<button type="button" class="btn btn-success btnOnePointFive" >Book</button>
			</a>
			<a href="<?php echo base_url('Home/book') ?>">
				<!--	Button for About-->
				<button type="button" class="btn btn-success btnOnePointFive" >About</button>
			</a>

		</nav>

	</header>


