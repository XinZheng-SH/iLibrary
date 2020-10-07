<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>BookShelf</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    #bookshelfContainer {
  background-image: url(<?php echo base_url(); ?>/assets/images/bookshelf/bookshelf.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 900px;
  height: 800px;
  width: 1000px;
  background-color: white;
}

#bookContainer1 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 120px;
  display: flex;
}
#bookContainer2 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 180px;
  display: flex;
}

#bookContainer3 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 240px;
  display: flex;
}
#book {
  width: 20%;
  height: 100%;
  background-color: cornsilk;
  margin-right: 30px;
}
    
    </style>
  </head>

  <body>
    <div><h1>bookshelf</h1></div>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage1.jpg" height="60%" width="50%" />
        <div>
        <h1>Nora Roberts</h1>
        <p>
        Nora Roberts (born Eleanor Marie Robertson on October 10, 1950) is an American author of more than 225 romance novels.[1] She writes as J. D. Robb for the in Death series and has also written under the pseudonyms Jill March and for publications in the U.K. as Sarah Hardesty.

Nora Roberts was the first author to be inducted into the Romance Writers of America Hall of Fame. As of 2011, her novels had spent a combined 861 weeks on The New York Times Best Seller list, including 176 weeks in the number-one spot.
        </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add to list</button>
      </div>
    </div>
  </div>
</div>
    <div id="bookshelfContainer">
      <div id="bookContainer1">
        <div id="book" data-toggle="modal" data-target="#exampleModal">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage1.jpg" height="100%" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage2.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage3.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage4.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage5.jpg" height="150px" width="100%" />
        </div>
      </div>
      <div id="bookContainer2">
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage6.jpg" height="100%" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage7.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage8.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage9.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage10.jpg" height="150px" width="100%" />
        </div>
      </div>
      <div id="bookContainer3">
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage11.jpg" height="100%" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage12.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage13.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage14.jpg" height="150px" width="100%" />
        </div>
        <div id="book">
          <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage15.jpg" height="150px" width="100%" />
        </div>
      </div>
    </div>

	<script type="text/javascript">
		// function used to pass LibraryName
		let libraries = {};
		var libraryName="";

		function iterateLibrary(data) {

			$.each(data.result.records, function(recordKey, recordValue) {

				var branchCode = recordValue["Branch Code"];
				var branchheading = recordValue["Branch Heading"];

				if(branchCode && branchheading) {
					libraries[branchCode]=branchheading;

					$("#records").append(
						$('<section class="record">').append(
							$('<h2>').text(branchCode),
							$('<h3>').text(branchheading)
						)
					);
				}
			});
		}

		function getCode(data, name){
			for(var libraryCode in data) {
				if (name.includes(libraries[libraryCode])){
					console.log("result found: "+ libraryCode);
					return libraryCode;
				}
			}
		}

		$(document).ready(function() {
			$.ajax({
				url:"https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=4630265b-4082-4fae-9291-c1dc80526755",
				dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
				cache: true,
				success: function(data) {
					iterateLibrary(data);
					console.log(libraries);
					getCode(libraries,libraryName);
				}
			});
		});

	</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
