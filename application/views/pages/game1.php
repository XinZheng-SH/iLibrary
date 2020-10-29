<div class="coverMark">
	<div class="container">
		<div class="inner-container">
			<h1>How would you describe your personality?</h1>
			<br>

			<h2 class="radio-group">
				<?php echo form_open('Games/secQuiz'); ?>
				<button type="submit" name="btn_quiz1" class="btn" id="quiz_btn" value=1>
					◌ Extrovert
				</button>

				<button type="submit" name="btn_quiz1" class="btn" id="quiz_btn"  value=2>
					◌ Introvert
				</button>

				<?php echo form_close();?>
			</h2>
		</div>
	</div>
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

			#quiz_btn  {
				width: 200px;
			}
		</style>

