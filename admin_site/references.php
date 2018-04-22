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
            <?php include 'admin_nav_bar.php';?>
          </div>
          <div class="col" id="content_section">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class ="panel-title">
                    <a class="collapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Materials 
                    </a>
                  </h4>
                </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class= "panel-body">
                  <?php $table = "materials"; $col = "material_name"; include "references_table.php";?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class ="panel-title">
                  <a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Material Types
                  </a>
                </h4>
              </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class= "panel-body">
                <?php $table = "material_types"; $col = "type_name"; include "references_table.php";?>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class ="panel-title">
                <a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Forms
                </a>
              </h4>
            </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class= "panel-body">
              <?php $table = "forms"; $col = "form_name"; include "references_table.php";?>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class ="panel-title">
              <a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Surface Treatments
              </a>
            </h4>
          </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class= "panel-body">
            <?php $table = "surface_treatments"; $col = "treatment_name"; include "references_table.php";?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class ="panel-title">
            <a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Decorations
            </a>
          </h4>
        </div>
      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
        <div class= "panel-body">
          <?php $table = "decorations"; $col = "decoration_name"; include "references_table.php"; ?>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSix">
        <h4 class ="panel-title">
          <a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Modifications
          </a>
        </h4>
      </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class= "panel-body">
        <?php $table = "modifications"; $col = "modification_name"; include "references_table.php";?>
      </div>
    </div>
  </div>




</div>
</div>
</div>

</body>
<?php include 'footer.php';?>
</html>
