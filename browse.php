<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Browse</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>

    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-2" id="sidebar_section">
            <?php include 'nav_bar.php';?>
          </div>
          <div class="col" id="content_section">

            <!-- Search by Catalog Number -->
            <form class="form-inline" method="post" action="">
              <div class="form-group mb-2">
                Catalog Number:
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="catalog_number">
              </div>
                <button type="submit" name="search_submit" class="btn btn-primary">Search</button>
            </form>
            <hr />

            <!-- Browse -->
            Define your search: (Hold CTRL on Windows or CMD on Mac to select more than one)
            <form method="post" action="">
              <div class="row align-items-center">
                <div class="form-group col">
                  <label for="material">Material</label>
                  <select multiple name="materials[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="materials"; $column="material_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="material_type">Material Type</label>
                  <select multiple name="material_types[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="material_types"; $column="type_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="form">Form</label>
                  <select multiple name="forms[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="forms"; $column="form_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="surface_treatment">Surface Treatment</label>
                  <select multiple name="surface_treatments[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="surface_treatments"; $column="treatment_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="decoration">Decoration</label>
                  <select multiple name="decorations[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="decorations"; $column="decoration_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="modification">Modification</label>
                  <select multiple name="modifications[]" class="form-control">
                    <option selected>---All---</option>
                    <?php $table="modifications"; $column="modification_name"; include "fill_select_option.php"; ?>
                  </select>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <button type="submit" name="browse_submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>

            <hr />

            <!-- Show results -->
            <div id="browse_results">
              <?php
              // Show catalog item search results
                if(isset($_POST["search_submit"])){
                  $catalog_number = $_POST["catalog_number"];
                  include 'get_catalog_item_by_id.php';
                }
              // Show browse results
                else if(isset($_POST["browse_submit"])){
                  // Save select form values into array
                  $default_select = "---All---";
                  $is_empty = True;
                  $selections = array("material"=>$_POST["materials"],
                  "material_type"=>$_POST["material_types"], "form"=>$_POST["forms"],
                "surface_treatment"=>$_POST["surface_treatments"], "modification"=>$_POST["modifications"],
              "decoration"=>$_POST["decorations"]);

                // Check if selections were made in all forms
                foreach ($selections as $key => $val){
                  if ($val[0] == $default_select){
                    $selections[$key] = NULL;
                  } else {
                    $is_empty = False;
                  }
                }
                // Display results
                  include 'browse_database.php';
                }?>
            </div>

          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>
