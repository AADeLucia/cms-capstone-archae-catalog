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
            <nav class = "sidebar">
                <div class="sidebar-sticky">
                    <ul class = "nav flex-column">
                        <li class = "nav-item active"><a class = "nav-link" href="index.php">Home</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="full_catalog.php">Full Catalog</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="contact_form.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">

            <!-- Query form -->
            <form class="form-inline">
              <div class="form-group mb-2">
                Catalog Number:
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="catalog_number">
              </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <hr />
            Define your search:
            <form>
              <div class="row align-items-center">
                <div class="form-group col">
                  <label for="material">Material</label>
                  <select id="material" class="form-control">
                    <option selected>All</option>
                    <option>Pottery</option>
                    <option>Charcoal</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="material_type">Material Type</label>
                  <select id="material_type" class="form-control">
                    <option selected>All</option>
                    <option>Bone Tempered</option>
                    <option>Wood</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="form">Form</label>
                  <select id="form" class="form-control">
                    <option selected>All</option>
                    <option>Hammer</option>
                    <option>Nail</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="surface_treatment">Surface Treatment</label>
                  <select id="surface_treatment" class="form-control">
                    <option selected>All</option>
                    <option>Stamped</option>
                    <option>Plain</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="decoration">Decoration</label>
                  <select id="decoration" class="form-control">
                    <option selected>All</option>
                    <option>Painted Zoned</option>
                    <option>Brushed</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="modification">Modification</label>
                  <select id="modification" class="form-control">
                    <option selected>All</option>
                    <option>Soot</option>
                    <option>Residue</option>
                  </select>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>

            <hr />
            <br />


            <!-- Show results -->
            <?php include 'browse_database.php';?>

          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>
