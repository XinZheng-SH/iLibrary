/** @format */

$(document).ready(function () {

  $.get(
    "https://www.googleapis.com/books/v1/volumes?q=" + "The old man and the sea",
    function (response) {
      for (i = 0; i < 1; i++) {
        title = $(
          '<h5 class="center-align white-text">' +
            response.items[i].volumeInfo.title +
            "</h5>"
        );
        author = $(
          '<h5 class="center-align white-text"> By:' +
            response.items[i].volumeInfo.authors +
            "</h5>"
        );
        img = $(
          '<img class="aligning card z-depth-5" id="dynamic"><br><a href=' +
            response.items[i].volumeInfo.infoLink +
            '><button id="imagebutton" class="btn red aligning">Read More</button></a>'
        );
        url = response.items[i].volumeInfo.imageLinks.thumbnail;
        img.attr("src", url);
        title.appendTo("#result");
        author.appendTo("#result");
        img.appendTo("#result");
      }
    }
  );

  return false;
});
