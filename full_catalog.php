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
          <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1" id="sidebar_section">
            <?php include 'nav_bar.php';?>
          </div>

    <div class="col-lg-10 col-md-11 col-sm-11 col-xs-11" id="content_section">
      <?php include 'full_catalog_database.php';?>
  </div>
</div>
</div>

</body>
<?php include 'footer.php';?>
</html>
