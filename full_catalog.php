<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Full Catalog</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>
    
    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-2" id="sidebar_section">
            <nav class = "d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class = "nav flex-column">
                        <li class = "nav-item active"><a class = "nav-link" href="index.php">Home</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Full Catalog</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="contact_form.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">
            <?php include 'full_catalog_database.php';?>  
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>