<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Contact</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>

    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="sidebar_section">
            <?php include 'nav_bar.php';?>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="content_section">
            <div class= "row">
            <div class="col-6" id="contact_info_side">
              <div class = "row">
                <div class = "col-4">
                  <img id="gilmore" src="media/gilmore.png">
                </div>
                <div class = "col">
                  <h6>Dr. Zack Gilmore <br>
                      Assistant Professor of Anthropology <br>
                      <br>
                      Cornell Social Sciences Building- Office 112 <br>
                      Telephone: 407-691-1314 <br>
                      Email: zgilmore@rollins.edu
                  </h6>
                </div>
              </div>

            </div>
            <div class="col" id="contact_form_side">
              <?php include 'contact_form.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<?php include 'footer.php';?>
</html>
