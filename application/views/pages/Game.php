
	<div class="coverMark">
		<div class="container">
			<div class="inner-container">
		<h1>How do you describe your personality?</h1>

		<br>

		<h2 class="radio-group">
			<a  id="myBtn" class="btn" type="button">
				<?php echo form_radio('introvert', 'accept', false);
				echo form_label("Introvert"); ?>
			</a>

			<a  id="myBtn" class="btn" type="button">
				<?php
				echo form_radio('extrovert', 'accept', false);
				echo form_label("Extrovert");
				?>
			</a>
		</h2>
	</div>

	<div id="bookModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>


			<img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage1.jpg" height="30%" width="30%" />
			<div>
				<br>
				<h5>Nora Roberts</h5>
				<p>
					Nora Roberts (born Eleanor Marie Robertson on October 10, 1950) is an American author of more than 225 romance novels.[1] She writes as J. D. Robb for the in Death series and has also written under the pseudonyms Jill March and for publications in the U.K. as Sarah Hardesty.
				</p>
		</div>

			<a href="<?php echo base_url('Radar/view') ?>" class="btn btn-light align-self-center" type="button">Go to nearby library
			</a>
	</div>


<style>
	body {
		background: url("<?php echo base_url(); ?>assets/images/test-bg.jpg") no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		-o-background-size: cover;
	}

	.coverMark {
		position: fixed;
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		background: rgba(0, 0, 0, .5);
	}

	h1 {
		color: white;
		font-size: 6em;
		text-align: center;
	}

	h2 {
		color: black;
		font-size: 2em;
		text-align: center;
	}

	.radio-group{
		/*justify-content: center;*/
		align-items: center;
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

	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
	}

	/* The Close Button */
	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
</style>

<script>
	// Get the modal
	var modal = document.getElementById("bookModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

