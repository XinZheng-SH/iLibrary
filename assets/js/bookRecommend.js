var img_class = { height:280 };

$(document).ready(function() {
	$.ajax({
		url:"https://api.nytimes.com/svc/books/v3/lists/current/hardcover-fiction.json?api-key=cpCI3M6CxeyJGDqvg8c6i6S8tOSFSPhf",
		dataType: "json",
		cache: true,
		success: function(data) {
			console.log(data);
			randomBookRecommendation(data);
		}
	});
});

function randomBookRecommendation(data){
		var random_book_id=Math.floor(Math.random() * Math.floor(14));
		var bookTitle = data.results.books[random_book_id].title;
		var img_url=data.results.books[random_book_id].book_image;
		var description=data.results.books[random_book_id].description;

		if(bookTitle) {
			$("#records").append(
					$('<img id="recom_cover">').attr("src", img_url).css(img_class),
			);

			$("#book_title").append(bookTitle);
			$("#book_description").append(description);
		}
}
