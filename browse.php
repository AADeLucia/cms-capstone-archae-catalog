<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Browse</title>
    </head>
<body>
    
    <?php include 'rollins_header.php';?>
    
    <section class="container">
      <div class="left-half">
        <nav class = "col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class = "nav flex-column">
                    <li class = "nav-item active"><a class = "nav-link" href="index.php">Home</a></li>
                    <li class = "nav-item"><a class = "nav-link" href="#">Browse</a></li>
                    <li class = "nav-item"><a class = "nav-link" href="#">Search</a></li>
                    <li class = "nav-item"><a class = "nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
      </div>
      <div class="right-half">
          <?php include 'full_catalog.php';?>
      </div>
    </section>

</body>
<?php include 'footer.php';?>
</html>