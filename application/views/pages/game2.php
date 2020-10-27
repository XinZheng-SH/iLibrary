<div class="coverMark">
	<div class="container">
		<div class="inner-container">
			<h1>Which kind of books do you like?</h1>
			<br>

			<h2 class="radio-group">
				<?php echo form_open('Games/thiQuiz'); ?>
				<button type="submit" name="btn_quiz2" class="btn myBtn" id="quiz_btn"  value=1>
					◌ Romantic
				</button>
				<button type="submit" name="btn_quiz2" class="btn myBtn" id="quiz_btn"   value=2>
					◌ Fiction
				</button>
				<button type="submit" name="btn_quiz2" class="btn myBtn" id="quiz_btn"   value=3>
					◌ Comic
				</button>

				<button type="submit" name="btn_quiz2" class="btn myBtn"  id="quiz_btn"  value=4>
					◌ Mystery
				</button>

				<?php echo form_close();?>

			</h2>
		</div>
	</div>
</div>

		<style>
			body {
				background: url("<?php echo base_url(); ?>assets/images/bg-quiz2.jpg") no-repeat center center fixed;
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

		</style>



