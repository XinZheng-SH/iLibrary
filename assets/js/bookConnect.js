let libraries = {};
var libraryName = "";
var libraryCode = "";
var url = "";
var img = "";
var title = "";
var author = "";

/* ---Read Cookie--- */

function getCookie(cookieName) {
	var strCookie = document.cookie;
	var arrCookie = strCookie.split("; ");
	for (var i = 0; i < arrCookie.length; i++) {
		var arr = arrCookie[i].split("=");
		if (cookieName == arr[0]) {
			return arr[1];
		}
	}
	return "";
}
var libraryName = getCookie("branchName");


/* ---All APIs Request--- */

$(document).ready(function () {
	//Library Branches
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=4630265b-4082-4fae-9291-c1dc80526755&",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateLibrary(data);
			console.log(libraries);
			getCode(libraries, libraryName);
		},
	});

	//Library Books
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateBook(data);
			console.log(libraries);
		},
	});
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=100&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateBook(data);
			console.log(libraries);
		},
	});
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=200&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateBook(data);
			console.log(libraries);
		},
	});
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=300&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateBook(data);
			console.log(libraries);
		},
	});
	$.ajax({
		url:
			"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=400&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function (data) {
			iterateBook(data);
			console.log(libraries);
		},
	});
});

/* ---Retrieve LibraryCode--- */

function iterateLibrary(data) {
	$.each(data.result.records, function (recordKey, recordValue) {
		var branchCode = recordValue["Branch Code"];
		var branchheading = recordValue["Branch Heading"];

		if (branchCode && branchheading) {
			libraries[branchCode] = branchheading;

			// $("#records").append(
			// 	$('<section class="record">').append(
			// 		$("<h2>").text(branchCode),
			// 		$("<h3>").text(branchheading)
			// 	)
			// );
		}
	});
}

function getCode(data, name) {
	for (var libraryCode in data) {
		if (name.includes(libraries[libraryCode])) {
			console.log("result found: " + libraryCode);
			return libraryCode;
		}
	}
}

/* ---Checkout Library--- */

function iterateBook(data) {
	$.each(data.result.records, function (recordKey, recordValue) {
		var bookTitle = recordValue["Title"];
		var bookAuthor = recordValue["Author"];
		var checkoutLib = recordValue["Checkout Library"];
		var checkoutLibraryCode = getCode(libraries, libraryName);

		if (bookTitle && bookAuthor && checkoutLib == checkoutLibraryCode) {
			$(document).ready(function () {
				$.get(
					"https://www.googleapis.com/books/v1/volumes?q=" + bookTitle,
					function (data) {
						iterateGoogleBook(data);
					}
				);
			});

			$("#records").append(
				$('<section class="record">').append(
					$('<h2>').text(bookTitle),
					$('<h3>').text(bookAuthor),
					$('<h3>').text(checkoutLib)
				)
			);
		}
	});
}

/* ---Connect Google Book API--- */

function iterateGoogleBook(data) {
	title = $(
		'<h5 class="center-align">' + data.items[0].volumeInfo.title + "</h5>"
	);
	author = $(
		'<h5 class="center-align"> By:' + data.items[0].volumeInfo.authors + "</h5>"
	);
	img = $(
		'<img class="aligning card z-depth-5" id="dynamic"><br><a href=' +
			data.items[0].volumeInfo.infoLink +
			'><button id="imagebutton" class="btn red aligning">Read More</button></a>'
	);
	url = data.items[0].volumeInfo.imageLinks.thumbnail;
	img.attr("src", url);
	title.appendTo("#records");
	author.appendTo("#records");
	img.appendTo("#records");
}
