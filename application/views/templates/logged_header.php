<!doctype html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iLibrary</title>

	<!-- Main JS Files -->
	<script src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>" type="module"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>" type="text/javascript"></script>

	<!-- Bootstrap Files -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

	<!-- Main CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<!-- Book Files -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bookConnect.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
	<!-- <script src="<?php echo base_url('assets/js/bookConnect.js') ?>" type="text/javascript"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<!-- Font Files -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<!-- Radar Files -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
	<script src="https://unpkg.com/@popperjs/core@2" type="text/javascript"></script>



</head>

<body>

	<!-- ======= Header ======= -->

	<header>

		<nav class="navbar navbar-light" style="justify-content: center;height: 80px; background-color: rgba(0,0,0,0.66); z-index: 9;" ;>
			<a class="navbar-brand" href="<?php echo site_url() ?>"></a>
			<a href="<?php echo base_url('Radar/view') ?>">
				<button type="button" class="btn btn-outline-warning ">Radar</button>
			</a>
			<a href="<?php echo base_url('Games/index') ?>">
				<button type="button" class="btn btn-outline-warning ">Game</button>
			</a>
			<!-- <a href="<?php echo base_url('Books/view') ?>">
				<button type="button" class="btn btn-outline-warning ">Book</button>
			</a> -->
			<!--			Login Portal-->
			<div id="user-info" style="margin-left: 10em;">
				<p style="font-family:'Arial Black' ">Good day.
					<?php echo $username ?></p>
			</div>
			<a href="<?php echo base_url(''); ?>Books/bookList">
				<button type="button" class="btn btn-outline-warning ">My Favorite Books</button>
			</a>
			<a href="<?php echo base_url('Login/logout') ?>">
				<button type="button" class="btn btn-outline-warning ">Log out</button>
			</a>
		</nav>

		<!--	<nav class="navbar navbar-expand-lg navbar-light bg-light"-->
		<!--		 style="justify-content: center;height: 80px; background-color: rgba(0,0,0,0.1); z-index: 999999;" ;>-->
		<!--		<a class="navbar-brand" href="#">Navbar</a>-->
		<!--		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"-->
		<!--				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
		<!--			<span class="navbar-toggler-icon"></span>-->
		<!--		</button>-->
		<!--		<div class="collapse navbar-collapse" id="navbarNav">-->
		<!--			<ul class="navbar-nav">-->
		<!--				<li class="nav-item active">-->
		<!--					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
		<!--				</li>-->
		<!--				<li class="nav-item">-->
		<!--					<a class="nav-link" href="#">Features</a>-->
		<!--				</li>-->
		<!--				<li class="nav-item">-->
		<!--					<a class="nav-link" href="#">Pricing</a>-->
		<!--				</li>-->
		<!--				<li class="nav-item">-->
		<!--					<a class="nav-link disabled" href="#">Disabled</a>-->
		<!--				</li>-->
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</nav>-->

	</header>

	<!-- End Header -->