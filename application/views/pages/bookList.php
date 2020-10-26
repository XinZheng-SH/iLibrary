<section id="bookContainer">
    <section id="container">
        <section id="imgb1" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="imgb2" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="imgb3" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="imgb4" class="bookImg"></section>
    </section>
    <section id="container">
        <section id="img5" class="bookImg"></section>
    </section>
</section>


<?php

$favoriteBook = array("");
foreach ($bookList->result_array() as $row) {
    echo $row['book_title'];
    array_push($favoriteBook, $row['book_title']);
}
?>

<script>
    var favoriteBook = "<?php echo json_encode($favoriteBook) ?>";
    if (favoriteBook) {
        console.log("favoriteBook");
    }
    iterateBook(favoriteBook);



    function iterateBook(data) {
        var i = 1;
        $.each(data.result.records, function(recordKey, recordValue) {

            if (bookTitle[i]) {
                $(document).ready(function() {
                    $.get(
                        "https://www.googleapis.com/books/v1/volumes?q=" + favoriteBook[i],
                        function(data) {
                            iterateGoogleBook(data);
                        }
                    );
                });
            }
        });
    }

    function iterateGoogleBook(data) {

        var imgUrl = data.items[0].volumeInfo.imageLinks.thumbnail;
        var externalUrl = data.items[0].volumeInfo.infoLink;

        // Book Details Response
        var bookContentTitle = data.items[0].volumeInfo.title;
        var bookContentDesc = data.items[0].volumeInfo.description;
        var bookContentAuthor = data.items[0].volumeInfo.authors;

        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var imgClick = document.getElementById("imgb" + time);
        var modalImg = document.getElementById("imgModal");
        var captionText = document.getElementById("caption");
        var btnDiscover = document.getElementById("book-discover");
        var bookTitle = document.getElementById("book-title");
        var bookAuthor = document.getElementById("book-author");
        var bookDesc = document.getElementById("book-desc");

        img = $("<img src=" + imgUrl + ">");
        img.appendTo("#imgb" + time);
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