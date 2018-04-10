<!doctype html>
<html lang="en">
  <?php
    include("head.php");
    ?>
    <body>
      <div class = "container-fluid bg">
        <div class= "row">
        <div class = "col-md-4 col-sm-4 col-xs-12"></div>
        <div class = "col-md-4 col-sm-4 col-xs-12">
          <!-- /*** Form goes here ***/ -->

          <form action = "login.php" method = "post" class = "form-container">
            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" class="form-control" name="user" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
        <div class = "col-md-4 col-sm-4 col-xs-12"></div>
    </body>

</html>
