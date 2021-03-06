<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Home</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>

   <div id="body_content" class="container-fluid">
     <div class="row">
        <div class="col-lg-2 col-md-1 col-sm-12 col-xs-12" id="sidebar_section">
          <?php include 'nav_bar.php';?>
        </div>
        <div class="col-lg-10 col-md-11 d-none d-md-block" id="content_section">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="media/Indy.jpeg" alt="Indy">
              </div>
              <div class="carousel-item">
                <img src="media/Indy2.jpg" alt="Indy2">
              </div>
              <div class="carousel-item">
                <img src="media/Indy3.jpg" alt="Indy3">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        </div>
      </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>
