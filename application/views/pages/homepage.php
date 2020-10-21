

<div class="container">
	<div class="inner-container" align="center">
		<h3 class="text-white text-center">Find your nearest library</h3>
		<br>
		<h1><i class="fas fa-map-marked-alt text-white"></i></h1>
		<br>

		<div align="center">
			<a href="<?php echo base_url('Game/index') ?>" type="button" class="btn btn-light">
				Guess what you like?
			</a>

			<a href="<?php echo base_url('Radar/view') ?>" type="button" class="btn btn-light">
				Discover nearby library
			</a>
		</div>
	</div>
</div>

<div class="fixed-bottom text-white text-center">iLibrary@Cyber Giant</div>


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

	.inner-container {
		display: inline-block;
		justify-content: center;
		align-items: center;
	}

</style>

