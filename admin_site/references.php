<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>References</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>

    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-2" id="sidebar_section">
            <nav class = "sidebar">
                <div class="sidebar-sticky">
                    <ul class = "nav flex-column">
                        <!-- <li class = "nav-item active"><a class = "nav-link" href="index.php">Home</a></li> -->
                        <li class = "nav-item"><a class = "nav-link" href="index.php">Full Catalog</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="add_entry.php">Add Entry</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="bag_log.php">Bag Log</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">References</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">
<<<<<<< HEAD
            <!-- Place references information here -->
=======
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class ="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Materials</a>
                  </h4>
                </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class= "panel-body">
                  <?php include "references_tables/materials.php";?>
                </div>
              </div>
            </div>
          </div>

            <!-- Place references information here -->
            <h3>Material Types</h3>
            <?php include "references_tables/material_types.php";?>
            <h3>Forms</h3>
            <?php include "references_tables/form_table.php";?>
            <h3>Surface Treatments</h3>
            <?php include "references_tables/surface_treatment.php";?>
            <h3>Decorations</h3>
            <?php include "references_tables/decoration.php";?>
            <h3>Modifications</h3>
            <?php include "references_tables/modification.php";?>
>>>>>>> 92400a3e0e5957af5eb5c333ebf4b9373efb670f
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>