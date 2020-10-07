function getYear(year) {
	if(year) {
		return year.match(/[\d]{4}/); // This is regex (https://en.wikipedia.org/wiki/Regular_expression)
	}
}

function iterateRecords(data) {

	console.log(data);

	$.each(data.result.records, function(recordKey, recordValue) {

		var recordTitle = recordValue["Title"];
		//var recordYear = getYear(recordValue["dcterms:temporal"]);
		var recordAuthor = recordValue["Author"];
		var recordDate = recordValue["Date"];
		var recordBranchCode = recordValue["Checkout Library"];
		var recordBranchCode = recordValue["Checkout Library"];

		if (recordTitle && recordAuthor && recordDate) {

			$("#records").append(
				$('<section class="record">').append(
					$('<h2>').text(recordTitle),
					// $('<h3>').text(recordYear),
					// $('<img>').attr("src", recordImage),
					$('<p>').text(recordDate),
					$('<h2>').text(recordBranchCode)
				)
			);
		}
		// if (recordBranchCode == "SBK") {

		// 	$("#records").append(
		// 		$('<section class="record">').append(
		// 			$('<h2>').text(recordTitle),
		// 			// $('<h3>').text(recordYear),
		// 			// $('<img>').attr("src", recordImage),
		// 			$('<p>').text(recordDate),
		// 			$('<h2>').text(recordBranchCode)
		// 		)
		// 	)

		// }

	});

}

$(document).ready(function() {

	var data = {
		resource_id: "eda0bfe7-235f-4408-a5eb-74ceb40ed9df",
		limit: 50,
	};

	$.ajax({
		url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			iterateRecords(data);
		}
	});

	// var data = {
	// 	resource_id: '9eaeeceb-e8e3-49a1-928a-4df76b059c2d', // the resource id
	// 	limit: 50, // get 5 results
	// 	// q: 'jones' // query for 'jones'
	//   };
	//   $.ajax({
	// 	url: 'https://www.data.qld.gov.au/api/3/action/datastore_search',
	// 	data: data,
	// 	dataType: 'jsonp',
	// 	success: function(data) {
	// 		iterateRecords(data)
	// 	}
	//   });

});