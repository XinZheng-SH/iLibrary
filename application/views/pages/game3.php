<div class="coverMark">
	<div class="container">
		<div class="inner-container">
			<h1>Which is your favourite subject in high school?</h1>

			<h2 class="radio-group">
				<?php echo form_open('Games/book_recommend'); ?>
				<button type="submit" name="btn_quiz3" class="btn myBtn" value=1>
					◌ Art
				</button>
				<button type="submit" name="btn_quiz3" class="btn myBtn"  value=2>
					◌ Math
				</button>
				<button type="submit" name="btn_quiz3" class="btn myBtn" value=3>
					◌ History
				</button>
				<button type="submit" name="btn_quiz3" class="btn myBtn"  value=4>
					◌ Physical
				</button>
				<?php echo form_close();?>
			</h2>
		</div>
	</div>
</div>

		<div id="bookModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close text-dark">&times;</span>
				<section id="record" align="center" class="align-self-center"></section>
				<a href="<?php echo base_url('Radar/view') ?>" class="btn btn-light align-self-center" type="button">Go to nearby library
				</a>
			</div>
		</div>

		<style>
			body {
				background: url("<?php echo base_url(); ?>assets/images/quiz2-bg.jpg") no-repeat center center fixed;
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



