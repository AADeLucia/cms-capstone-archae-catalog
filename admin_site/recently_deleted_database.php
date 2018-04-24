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
      <?php
      include "remote_db_access.php";
      //include "local_db_access.php";

      //Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      //Check connection
      if ($conn->connect_error){
          die("Connection failed: " .$conn->connect_error);
      }

      // Attempt select query execution
      $sql = "SELECT * FROM recently_deleted ORDER BY date_deleted ASC";

      include "recently_deleted_database_view.php";

      // Close connection
      $conn->close();
      ?>
  </div>
</div>
</div>

</body>
<?php include 'footer.php';?>
</html>
