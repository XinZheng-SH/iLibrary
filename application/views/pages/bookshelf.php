    <style type="text/css">

*{
  margin:0;
  padding:0;
}

@media only screen and (min-width: 768px)  { #bookshelfContainer {
  background-image: url(<?php echo base_url(); ?>/assets/images/bookshelf/bookshelf.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 900px;
  height: 800px;
  width: 1000px;
  margin: auto;
  

}

#container{
  width:100%;
 height:100%;
 display:block;
 background-image: url(<?php echo base_url(); ?>/assets/images/bookshelf/background.jpg);
 background-size:100%;
 background-repeat:no-repeat;
 
}


#bookContainer1 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 140px;
  display: flex;
}
#bookContainer2 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 200px;
  display: flex;
}

#bookContainer3 {
  height: 150px;
  width: 800px;
  position: relative;
  left: 150px;
  top: 260px;
  display: flex;
}
#book {
  width: 20%;
  height: 100%;
  background-color: cornsilk;
  margin-right: 30px;
}}


@media only screen and (max-width: 768px){

  #bookshelfContainer {
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
  height: 800px;
  width: 50%;
  margin: auto;}

  #book {
  width: 300px;
  height: 400px;

}
#container{
  width:100%;
 height:100%;
 display:block;
 background-size:100%;
 background-repeat:no-repeat;
 
}


#bookContainer1 {
  height: 150px;
  width: 800px;
  position: relative;
  top: 140px;
  
}
#bookContainer2 {
  height: 150px;
  width: 800px;
  position: relative;
  top: 1200px;
}

#bookContainer3 {
  height: 150px;
  width: 800px;
  position: relative;
  top: 2260px;
  
}
    
    </style>
<!--  </head>-->

<!--  <body>-->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div id="container">
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
                  <a href="http://maps.google.co.uk/maps?q=central library"?
          <button type="button" class="btn btn-primary">Go to library</button>
          </a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right:50px;">Close</button>
        </div>
      </div>
    </div>
  </div >
      <div style="color: rgba(255,255,255,0.7)"><h1>bookshelf</h1></div>
      <div id="bookshelfContainer">
        <div id="bookContainer1">
          <div id="book" data-toggle="modal" data-target="#exampleModal">
            <img src="<?php echo base_url();  ?>/assets/images/bookshelf/bookImage1.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage13.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage14.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage15.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage16.jpg" height=100% width=100% />
          </div>
        </div>
        <div id="bookContainer2">
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage17.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage18.jpg" height=100% width=100%/>
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage19.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage20.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage10.jpg" height=100% width=100% />
          </div>
        </div>
        <div id="bookContainer3">
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage11.jpg" height=100% width=100%/>
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage12.jpg" height=100% width=100%/>
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage13.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage14.jpg" height=100% width=100% />
          </div>
          <div id="book">
            <img src="<?php echo base_url(); ?>/assets/images/bookshelf/bookImage15.jpg" height=100% width=100% />
          </div>
        </div>
      </div>
    </div>
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!--  </body>-->
<!--</html>-->
