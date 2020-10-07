<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--	<meta charset="UTF-8">-->
<!--	<title>Home Page</title>-->
<!--	<link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/bootstrap.css">-->
<!--	<link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/bootstrap-grid.css">-->
<!--	<link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets/css/bootstrap-reboot.css">-->
<!--	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">-->
<!--</head>-->
<!--<body>-->
<div class="container">

	<div class="bg-transparent" align="center">

		<h3 class="text-white">Find your nearest library</h3>
		<h1><i class="fas fa-map-marked-alt text-white"></i></h1>
		<form method="post" action="<?php echo base_url('Radar/view'); ?>welcome">
			<div class="form-group">
				<input type="text" name="postcode" placeholder="Enter your postcode" required autofocus>
			</div>
			<button type="button" class="btn btn-light">Submit</button>
		</form>
	</div>
	<div class="fixed-bottom text-white text-center">iLibrary@Cyber Giant</div>
</div>
</body>

<style>
	body {
		background: url("<?php echo base_url(); ?>assets/images/background.jpg") no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		-o-background-size: cover;
	}

	.container {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}

</style>
<!--</html>-->
