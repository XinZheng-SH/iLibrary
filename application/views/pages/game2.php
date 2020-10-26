<script src="<?php echo base_url('assets/js/bookRecommend.js') ?>"></script>

<div class="coverMark">
	<div class="container">
		<div class="inner-container">
			<h1>Who is your favourite writer?</h1>

			<br>

			<h2 class="radio-group">
				<a href="<?php echo base_url('Games/thiQuiz') ?>" id="myBtn" class="btn" type="button">
					<?php echo form_radio('J. K. Rowling', 'accept', false);
					echo form_label("J. K. Rowling"); ?>
				</a>

				<a  href="<?php echo base_url('Games/thiQuiz') ?>"id="myBtn" class="btn" type="button">
					<?php
					echo form_radio('William Shakespeare', 'accept', false);
					echo form_label("William Shakespeare");
					?>
				</a>
				<a  href="<?php echo base_url('Games/thiQuiz') ?>"id="myBtn" class="btn" type="button">
					<?php echo form_radio('Ernest Hemingway', 'accept', false);
					echo form_label("Ernest Hemingway"); ?>
				</a>

				<a href="<?php echo base_url('Games/thiQuiz') ?>" id="myBtn" class="btn" type="button">
					<?php
					echo form_radio('Jane Austen', 'accept', false);
					echo form_label("Jane Austen");
					?>
				</a>
			</h2>
		</div>

		<style>
			body {
				background: url("<?php echo base_url(); ?>assets/images/quiz3-bg.jpg") no-repeat center center fixed;
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

			#myBtn{
				width: 200px;
			}

		</style>



