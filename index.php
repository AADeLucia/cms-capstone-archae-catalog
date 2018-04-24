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
            <!-- The slideshow -->
            <?php include 'carousel_pull.php';?>

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
