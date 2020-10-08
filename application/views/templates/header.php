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

<style type="text/css">
  #bookshelfContainer {
  background-image: url(<?php echo base_url(); ?>/assets/images/bookshelf/bookshelf.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 900px;
  height: 800px;
  width: 1000px;
  margin: auto;
}

*{
  margin:0;
  padding:0;
}

#container{
  width:100%;
 height:100%;
 display:block;
 background-image: url(<?php echo base_url(); ?>/assets/images/bookshelf/background.jpg);
 background-size:100%;
 background-repeat:no-repeat;
}

#bookContainer1 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 140px;
  display: flex;
}

#bookContainer2 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 200px;
  display: flex;
}

#bookContainer3 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 260px;
  display: flex;
}

#book {
  width: 20%;
  height: 100%;
  background-color: cornsilk;
  margin-right: 30px;
}
    </style>

	<script src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
	<script src="https://unpkg.com/@popperjs/core@2" type="text/javascript"></script>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>" type="module"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>" type="text/javascript"></script>
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


