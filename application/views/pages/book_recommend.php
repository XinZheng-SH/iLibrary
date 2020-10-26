<script src="<?php echo base_url('assets/js/bookRecommend.js') ?>"></script>

<div class="coverMark">
	<div class="container">

		<div id="bookModal" class="modal">
			<div class="modal-content">
				<span class="close text-dark">&times;</span>
				<h2>You probably like to read: </h2>
				<div class="d-flex align-content-center bg-light m-3 p-3">
					<div>
						<section id="records"></section>
					</div>
					<div class="info">
						<h5 id="book_title"> </h5>
						<p id="book_description">Description: </p>
					</div>
				</div>

				<div class="d-flex justify-content-center">
					<a href="http://maps.google.co.uk/maps?q=central library"?
					<button type="button" class="btn btn-primary"><img src="<?php echo base_url(); ?>assets/images/map_icon.png" width="20px" )"> Start Navigation</button>
					</a>
				<a href="<?php echo base_url('Books/view') ?>" class="btn btn-light align-self-center" type="button">Get more book inspiration
				</a>
				</div>
			</div>
		</div>

		<style>

			body {
				background: url("<?php echo base_url(); ?>assets/images/quiz-result.jpg") no-repeat center center fixed;
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

			.info {
				padding: 70px 0;
				border: 2px solid green;
				text-align: center;
			}

			h2 {
				color: black;
				font-size: 2em;
				text-align: center;
			}

			h5{
				font-size: 1.5em;
				text-align: center;
			}

			p{
				font-size: 1em;
				text-align: center;
			}

			.container {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 150vh;
			}

			.modal {
				display: flex;
				position: fixed;
				z-index: 1;
				padding-top: 100px;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,.5);
			}

			/* Modal Content */
			.modal-content {
				background-color: #fefefe;
				margin: auto;
				padding: 5px;
				border: 1px solid #888;
				width: 60%;
			}

			/* The Close Button */
			.close {
				color: #aaaaaa;
				font-size: 3em;
				font-weight: bold;
			}

			.close:hover,
			.close:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
		</style>


