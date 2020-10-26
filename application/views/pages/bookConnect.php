<section id="bookContainer">
    <section id="container">
        <section id="img1" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img2" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img3" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img4" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img5" class="bookImg"></section>
    </section>
</section>

<section id="bookContainer">
    <section id="container">
        <section id="img6" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img7" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img8" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img9" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img10" class="bookImg"></section>
    </section>
</section>

<!-- Trigger the Modal -->
<!-- <img id="myImg" alt="bookCover" style="width:100%;max-width:300px"> -->

<!-- The Modal -->
<div id="myModal" class="modal-Book">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img id="imgModal" class="modal-content">

    <!-- Modal Caption (Book) -->
    <div id="caption">
        <h2 id="book-title"></h2>
        <h4 id="book-author"></h4>
        <div id="book-desc"></div>

        <a id="book-discover" target="_blank"><button type="button" class="btn" style="margin: 4rem;">Discover</button></a>
        <button id="book-add" onclick="addToList()" type="button" class="btn" style="">Add To List</button>
    </div>



</div>

<script>
    let libraries = {};
    var libraryName = "";
    var libraryCode = "";
    var url = "";
    var img = "";
    var title = "";
    var author = "";
    var time = 0;
    var externalUrl = "";

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

    $(document).ready(function() {
        //Library Branches
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=4630265b-4082-4fae-9291-c1dc80526755&",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateLibrary(data);
                getCode(libraries, libraryName);
            },
        });

        //Library Books
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateBook(data);
            },
        });
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=100&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateBook(data);
                console.log(libraries);
            },
        });
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=200&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateBook(data);
                console.log(libraries);
            },
        });
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=300&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateBook(data);
                console.log(libraries);
            },
        });
        $.ajax({
            url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?offset=400&resource_id=79c8fba8-56a9-4dd9-ad8d-8a8b99789b7f",
            dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
            cache: true,
            success: function(data) {
                iterateBook(data);
                console.log(libraries);
            },
        });
    });

    /* ---Retrieve LibraryCode--- */

    function iterateLibrary(data) {
        $.each(data.result.records, function(recordKey, recordValue) {
            var branchCode = recordValue["Branch Code"];
            var branchheading = recordValue["Branch Heading"];

            if (branchCode && branchheading) {
                libraries[branchCode] = branchheading;

                // Check Branch Response
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
        $.each(data.result.records, function(recordKey, recordValue) {
            var bookTitle = recordValue["Title"];
            var bookAuthor = recordValue["Author"];
            var checkoutLib = recordValue["Checkout Library"];
            var checkoutLibraryCode = getCode(libraries, libraryName);

            if (bookTitle && bookAuthor && checkoutLib == checkoutLibraryCode) {
                $(document).ready(function() {
                    $.get(
                        "https://www.googleapis.com/books/v1/volumes?q=" + bookTitle,
                        function(data) {
                            iterateGoogleBook(data);
                        }
                    );
                });
                // Check Books Response in particular library
                // $("#records").append(
                // 	$('<section class="record">').append(
                // 		$("<h2>").text(bookTitle),
                // 		$("<h3>").text(bookAuthor),
                // 		$("<h3>").text(checkoutLib)
                // 	)
                // );
            }
        });
    }

    /* ---Connect Google Book API--- */

    function iterateGoogleBook(data) {
        // title = $(
        // 	'<h5 class="center-align">' + data.items[0].volumeInfo.title + "</h5>"
        // );
        // author = $(
        // 	'<h5 class="center-align"> By:' + data.items[0].volumeInfo.authors + "</h5>"
        // );
        // img = $(
        // 	'<img class="aligning card z-depth-5" id="dynamic"><br><a href=' +
        // 		data.items[0].volumeInfo.infoLink +
        // 		'><button id="imagebutton" class="btn red aligning">Read More</button></a>'
        // );
        // url = data.items[0].volumeInfo.imageLinks.thumbnail;
        // img.attr("src", url);
        // title.appendTo("#title" + time);
        // author.appendTo("#author" + time);
        // img.appendTo("#img" + time);
        // time += 1;
        var imgUrl = data.items[0].volumeInfo.imageLinks.thumbnail;
        var externalUrl = data.items[0].volumeInfo.infoLink;

        // Book Details Response
        var bookContentTitle = data.items[0].volumeInfo.title;
        var bookContentDesc = data.items[0].volumeInfo.description;
        var bookContentAuthor = data.items[0].volumeInfo.authors;

        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var imgClick = document.getElementById("img" + time);
        var modalImg = document.getElementById("imgModal");
        var captionText = document.getElementById("caption");
        var btnDiscover = document.getElementById("book-discover");
        var bookTitle = document.getElementById("book-title");
        var bookAuthor = document.getElementById("book-author");
        var bookDesc = document.getElementById("book-desc");

        img = $("<img src=" + imgUrl + ">");
        img.appendTo("#img" + time);
        time += 1;

        $(imgClick).click(function() {
            modal.style.display = "block";
            modalImg.src = imgUrl;
            // captionText.innerHTML = "hello";
            bookTitle.innerHTML = bookContentTitle;
            bookAuthor.innerHTML = bookContentAuthor;
            bookTitle.innerHTML = bookContentTitle;
            bookDesc.innerHTML = bookContentDesc;
            btnDiscover.href = externalUrl;

        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

    }

    function addToList() {
        var bookTitle = document.getElementById("book-title").innerHTML;
        console.log(bookTitle);
        document.cookie = "listBookTitle=" + bookTitle + "; expires=Thu, 10 Dec 2020 12:00:00 UTC; path=/"
        $.post("<?php echo base_url('Books/bookAddList') ?>");
        alert("Successfully added");
    }
</script>

<style>
    body {
        background: url("<?php echo base_url(); ?>/assets/images/bookshelf/bookshelf-bg2.jpg") no-repeat center fixed;
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover; */
    }

    /* Style the Image Used to Trigger the Modal */
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal-Book {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 999;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.7);
        /* Black w/ opacity */

    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 300px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;

    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>