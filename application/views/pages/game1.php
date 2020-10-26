<script src="<?php echo base_url('assets/js/bookRecommend.js') ?>"></script>

<div class="coverMark">
	<div class="container">
		<div class="inner-container">
			<h1>How do you describe your personality?</h1>

			<br>

			<h2>
<!---->
<!--				<a href="--><?php //echo base_url('Games/secQuiz') ?><!--">-->
<!--					<button type="button" class="btn">-->
<!--						<input type="radio" id="quiz1" name="quiz1" value="Introvert">-->
<!--						Introvert-->
<!--					</button>-->
<!--				</a>-->

				<input type="checkbox" name="jevattend" id="jevattend_id" value="1"  onclick="form.submit();"/>
			<!--				<a href="--><?php //echo base_url('Games/secQuiz') ?><!--" class="btn btn-secondary text-white" type="button"-->
<!--				 >-->
<!--<!--					<input type="radio" id="quiz1" name="quiz1" value="Introvert">-->-->
<!--<!--					<label for="quiz1" class="text-white"> Introvert</label><br>-->-->
<!--					--><?php //echo form_radio('introvert', 'accept', false);
//					echo form_label("Introvert"); ?>
<!--				</a>-->

				<a href="<?php echo base_url('Games/secQuiz') ?>" class="btn btn-secondary" type="button"
				>
					<input type="radio" id="quiz1" name="quiz1" value="Introvert">
					<label for="quiz1" class="text-white"> Extrovert</label><br>
<!--					--><?php
//					echo form_radio('extrovert', 'accept', false);
//					echo form_label("Extrovert");
//					?>
				</a>
			</h2>
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
				color: white;
				font-size: 2em;
				text-align: center;
			}

			.radio-group {
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

			#myBtn {
				width: 200px;
			}
		</style>


