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
            <!-- Place references information here -->
            <h3>Materials</h3>
            <?php include "references_tables/materials.php";?>
            <h3>Material Types</h3>
            <?php include "references_tables/material_types.php";?>
            <h3>Forms</h3>
            <?php include "references_tables/form_table.php";?>
            <h3>Surface Treatments</h3>
            <?php include "references_tables/surface_treatment.php";?>
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>
