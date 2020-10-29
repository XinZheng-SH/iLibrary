<div id="login-container">
	<div class="col-md-8 offset-md-2" style="padding-bottom: 13rem; padding-top: 5rem;">
		<span class="anchor" id="formUserEdit"></span>
		<hr class="my-5">

		<!-- form user info -->
		<div class="card card-outline-secondary">
			<div class="card-header" style="font-family: 'Arial Black'; background-color: whitesmoke;">
				<div class="row">
					<h3 class="mb-0">Login</h3>
					<div id="register-button-container" class="col-md-10">
					<a href="<?php echo base_url('Login/register_page') ?>">
						<button type="button" class="btn btn-success" style="margin-right: 2em;">Register</button>
					</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form id="login-form" method="post" action="<?php echo site_url('Login/auth')?>"
					  class="form" role="form" autocomplete="off">
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
							<input type="reset" class="btn btn-secondary" value="Reset">
							<input type="submit" class="btn btn-success" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
