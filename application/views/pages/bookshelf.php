<!--<!DOCTYPE html>-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8" />-->
<!--    <title>BookShelf</title>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<style type="text/css">


	#bookshelfContainer {
		background-image: url(<?php echo base_url('assets/img/bookshelf/bookshelf.jpg'); ?>);
		background-repeat: no-repeat;
		background-position: center;
		background-size: 900px;
		height: 800px;
		width: 1000px;
		margin: auto;


	}

	* {
		margin: 0;
		padding: 0;
	}

	#container {
		width: 100%;
		height: 100%;
		display: block;
		background-image: url(<?php echo base_url('assets/img/bookshelf/background.jpg'); ?>);
		background-size: 100%;
		background-repeat: no-repeat;

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
		margin-right: 30px;
	}

</style>
<!--  </head>-->

<!--  <body>-->
<div><h2>bookshelf</h2></div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->


	<div id="bookshelfContainer">
		<div id="bookContainer1">
			<div id="book" data-toggle="modal" data-target="#exampleModal">
				<img src="<?php echo base_url('assets/img/bookshelf/bookImage1.jpg'); ?>" height="100%" width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>assets/images/bookshelf/bookImage2.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage3.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage4.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage5.jpg" height="150px"
					 width="100%"/>
			</div>
		</div>
		<div id="bookContainer2">
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage6.jpg" height="100%" width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage7.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage8.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage9.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage10.jpg" height="150px"
					 width="100%"/>
			</div>
		</div>
		<div id="bookContainer3">
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage11.jpg" height="100%"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage12.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage13.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage14.jpg" height="150px"
					 width="100%"/>
			</div>
			<div id="book">
				<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage15.jpg" height="150px"
					 width="100%"/>
			</div>
		</div>
	</div>
</div>
