<div id="login-container">
	<div class="col-md-8 offset-md-2" style="padding-bottom: 7rem; padding-top: 1rem;">
		<span class="anchor" id="formUserEdit"></span>
		<hr class="my-5">

		<!-- form user info -->
		<div class="card card-outline-secondary">
			<div class="card-header" style="font-family: 'Arial Black'; background-color: whitesmoke;">
				<div class="row">
					<h3 class="mb-0">Register</h3>
				</div>
			</div>
			<div class="card-body">

				<?php echo validation_errors("<div class='alert alert-danger' style='font-size: 16px'>","</div>"); ?>

				<form id="login-form" method="post" action="<?php echo site_url('Login/create')?>"
					  class="form" role="form" autocomplete="off">
					<?php if($error = $this->session->flashdata('err_msg')){ ?>
						<p style="color: red"><strong>Sorry</strong> <?php echo $error; ?></p>
					<?php } ?>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email:</label>
						<div class="col-lg-6">
							<input class="form-control" name="email" type="email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Last Name:</label>
						<div class="col-lg-6">
							<input class="form-control" name="lastName" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">First Name:</label>
						<div class="col-lg-6">
							<input class="form-control" name="firstName" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Username:</label>
						<div class="col-lg-6">
							<input class="form-control" name="username" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Password:</label>
						<div class="col-lg-6">
							<input class="form-control" name="password" type="password" id="password">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-6">
							<input type="submit" class="btn btn-success" value="Register">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
