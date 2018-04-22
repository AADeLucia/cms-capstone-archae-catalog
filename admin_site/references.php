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
                  <h4 class="panel-title">
                    <a class="collapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Materials
                    </a>
                  </h4>
                </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class= "panel-body">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add New Material
                  </button>
                  <div class="modal fade" id="myModal">
                    <div class= "modal-dialog">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Material</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!--Modal Content-->
                        <div class="modal-body">
                          HIIII.
                        </div>
                        <!--Modal Footer-->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $table = "materials"; $col = "material_name"; include "references_table.php";?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Material Types
                  </a>
                </h4>
              </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class= "panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                  Add New Material Type
                </button>
                <div class="modal fade" id="myModal2">
                  <div class= "modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Add New Material Type</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!--Modal Content-->
                      <div class="modal-body">
                        Wat up.
                      </div>
                      <!--Modal Footer-->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $table = "material_types"; $col = "type_name"; include "references_table.php";?>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Forms
                </a>
              </h4>
            </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class= "panel-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
                Add New Form
              </button>
              <div class="modal fade" id="myModal3">
                <div class= "modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add New Form</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!--Modal Content-->
                    <div class="modal-body">
                      YAAAAS.
                    </div>
                    <!--Modal Footer-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php $table = "forms"; $col = "form_name"; include "references_table.php";?>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Surface Treatments
              </a>
            </h4>
          </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class= "panel-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
              Add New Surface Treatment
            </button>
            <div class="modal fade" id="myModal4">
              <div class= "modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Surface Treatment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!--Modal Content-->
                  <div class="modal-body">
                    That is what I did right there.
                  </div>
                  <!--Modal Footer-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                  </div>
                </div>
              </div>
            </div>
            <?php $table = "surface_treatments"; $col = "treatment_name"; include "references_table.php";?>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Decorations
            </a>
          </h4>
        </div>
      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
        <div class= "panel-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
            Add New Decoration
          </button>
          <div class="modal fade" id="myModal5">
            <div class= "modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add New Decoration</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--Modal Content-->
                <div class="modal-body">
                  Yo.
                </div>
                <!--Modal Footer-->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                </div>
              </div>
            </div>
          </div>
          <?php $table = "decorations"; $col = "decoration_name"; include "references_table.php"; ?>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSix">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Modifications
          </a>
        </h4>
      </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class= "panel-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
          Add New Modification
        </button>
        <div class="modal fade" id="myModal6">
          <div class= "modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New Modification</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--Modal Content-->
              <div class="modal-body">
                Hayyyyyyyy gurl.
              </div>
              <!--Modal Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              </div>
            </div>
          </div>
        </div>
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
