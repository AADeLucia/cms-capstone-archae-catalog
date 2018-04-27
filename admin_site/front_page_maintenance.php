<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<head>
  <title>Maintenance</title>
</head>
<body>
  <?php include 'rollins_header.php';?>

  <div id="body_content" class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1" id="sidebar_section">
        <?php include 'admin_nav_bar.php';?>
      </div>

      <div class="col-lg-10 col-md-11 col-sm-11 col-xs-11" id="content_section">
        <h4>Add Image to Carousel</h4>
        <form method='post' enctype='multipart/form-data' action='upload_test.php'>
          Select Image to Upload: <input type='file' name='file_upload'>
          <input class='btn btn-primary' type='submit'>
        </form>
        <br>
        <h4>Delete Image from Carousel</h4>
        <br>
        <?php include "display_photos.php";?>
      </div>
    </div>
  </div>

</body>
<?php include 'footer.php';?>
</html>
