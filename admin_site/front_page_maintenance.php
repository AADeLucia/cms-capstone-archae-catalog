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
            <?php include 'admin_nav_bar.php';?>
          </div>

    <div class="col-lg-10 col-md-11 col-sm-11 col-xs-11" id="content_section">
      <h3>Update Carousel Photos</h3>
      <form action= "upload.php?dir=../media/carousel/" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
      <?php include "display_photos.php";?>
    </div>
</div>
</div>

</body>
<?php include 'footer.php';?>
</html>
