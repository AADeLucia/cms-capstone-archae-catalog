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
        <div class="col-2" id="sidebar_section">
          <nav class = "d-none d-md-block sidebar">
              <div class="sidebar-sticky">
                  <ul class = "nav flex-column">
                      <li class = "nav-item active"><a class = "nav-link" href="#">Home</a></li>
                      <li class = "nav-item"><a class = "nav-link" href="full_catalog.php">Full Catalog</a></li>
                      <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                      <li class = "nav-item"><a class = "nav-link" href="contact.php">Contact</a></li>
                  </ul>
              </div>
          </nav>
        </div>
        <div class="col" id="content_section">
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
                <img src="Indy.jpeg" alt="Indy">
              </div>
              <div class="carousel-item">
                <img src="Indy2.jpg" alt="Indy2">
              </div>
              <div class="carousel-item">
                <img src="Indy3.jpg" alt="Indy3">
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