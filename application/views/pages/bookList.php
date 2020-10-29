<?php
$favoriteBook = [];
foreach ($bookList->result_array() as $row) {
    array_push($favoriteBook, $row['book_title']);
}
?>
<section id="records"></section>

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
        <a href="<?php echo base_url('Radar/view') ?>"><button id="book-add" type="button" class="btn" style="">Navigate to library</button></a>
    </div>



</div>

<script>
    var favoriteBook = <?php echo json_encode($favoriteBook) ?>;
    var time = 0;

    if (favoriteBook) {
        favoriteBook.forEach(book => {
            // console.log(book);
            iterateBook(book);
        });
    }

    function iterateBook(book) {
        console.log(book);
        if (book) {
            $(document).ready(function() {
                $.get(
                    "https://www.googleapis.com/books/v1/volumes?q=" + book,
                    function(data) {
                        // console.log(data);
                        iterateGoogleBook(data);
                    }
                );
            });
        }
    }

    function iterateGoogleBook(data) {
        // Image Details Response
        var imgUrl = data.items[0].volumeInfo.imageLinks.thumbnail;
        var externalUrl = data.items[0].volumeInfo.infoLink;
        var img = $('<img id="bookModal" class="card-img" src="">');

        // Book Details Response
        var bookContentTitle = data.items[0].volumeInfo.title;
        var bookContentDesc = data.items[0].volumeInfo.description;
        var bookContentAuthor = data.items[0].volumeInfo.authors;

        $("#records").append(
            $('<div  class="card mb-3" style="max-width: 960px;margin-left: 20%;">').append(
                $("<div id='record' class='row no-gutters'>").append(
                    $('<div class="col-md-4">').append(
                        img.attr("src", imgUrl),
                    ),
                    $('<div class="col-md-8">').append(
                        $('<div class="card-body">').append(
                            $('<h5 class="card-title">').text(bookContentTitle),
                            $('<p class="card-text">').text(bookContentAuthor),
                            $('<p class="card-text">').text(bookContentDesc.substring(0, 500) + " ......")
                        )
                    )
                )
            )
        );

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("imgModal");
        var captionText = document.getElementById("caption");
        var btnDiscover = document.getElementById("book-discover");
        var bookTitle = document.getElementById("book-title");
        var bookAuthor = document.getElementById("book-author");
        var bookDesc = document.getElementById("book-desc");

        $(img).click(function() {
            modal.style.display = "block";
            modalImg.src = imgUrl;
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
</script>

<style>
    body {
        background: url("<?php echo base_url(); ?>/assets/images/bookshelf/bookshelf-bg2.jpg") no-repeat center fixed;
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover; */
    }

    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        max-width: 75%;
        height: auto;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    .record {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.4);
        border: 1px solid rgb(22, 166, 185);
        padding: 1em;
        margin-top: 1em;
    }

    .result {
        border: 5px solid rgb(22, 166, 185);
        padding: 1em;
        margin-top: 1em;
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