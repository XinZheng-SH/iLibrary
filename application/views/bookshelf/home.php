<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>BookShelf</title>
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
    CNM
    <div id="bookshelfContainer">
      <div id="bookContainer1">
        <div id="book">
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
  </body>
</html>
