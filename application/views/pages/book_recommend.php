<!-- Calculate results of users' quiz result, based on user's score, recommend a book for the user from New York Times
 Best Selling book API-->

<div id="total_score" style="display: none;">
	<?php echo
	$scores = $this->session->userdata('score1') +
		$this->session->userdata('score2') +
		$this->session->userdata('score3');
	?>
</div>

<div class="coverMark">
	<div class="container">

		<div class="modal">
			<div class="modal-content">
				<h2>You probably like to read:</h2>
				<div class="d-flex align-content-center bg-light m-3 p-3">
					<div>
						<section id="records"></section>
					</div>
					<div class="info">
						<h5 id="book_title"></h5>
						<p id="book_description">Description: </p>
					</div>
				</div>

				<div class="d-flex justify-content-center">
					<a href="http://maps.google.co.uk/maps?q=central library" ?
					<button type="button" class="btn btn-primary"><img
							src="<?php echo base_url(); ?>assets/images/map_icon.png" width="20px" )"> Start Navigation
					</button>
					</a>
					<a href="<?php echo base_url('Books/view') ?>" class="btn btn-light align-self-center"
					   type="button">Get more book inspiration
					</a>
				</div>
			</div>
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

	h5 {
		font-size: 1.5em;
		text-align: center;
	}

	p {
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
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, .5);
	}

	.modal-content {
		background-color: #fefefe;
		margin: auto;
		border: 1px solid #888;
		width: 60%;
	}

</style>


<script type="text/javascript">
	var img_class = {height: 280};
	$(document).ready(function () {
		$.ajax({
			url: "https://api.nytimes.com/svc/books/v3/lists/current/hardcover-fiction.json?api-key=cpCI3M6CxeyJGDqvg8c6i6S8tOSFSPhf",
			dataType: "json",
			cache: true,
			success: function (data) {
				console.log(data);
				randomBookRecommendation(data);
			}
		});
	});

	function randomBookRecommendation(data) {

		var random_book_id = <?php echo $scores?>;
		var bookTitle = data.results.books[random_book_id].title;
		var img_url = data.results.books[random_book_id].book_image;
		var description = data.results.books[random_book_id].description;

		if (bookTitle) {
			$("#records").append(
				$('<img id="recom_cover">').attr("src", img_url).css(img_class),
			);

			$("#book_title").append(bookTitle);
			$("#book_description").append(description);
		}
	}
</script>
