<h1>New Catalog Entry</h1>
<h6>Please fill all required fields</h6>
<form action="add_entry_to_catalog.php" method="post" enctype="multipart/form-data">

  <h2>Basic Information</h2>
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="full_catalog_number">Full Catalog Number</label>
        <input type="text" class="form-control" name="full_catalog_number">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="catalog_number">Catalog Number</label>
        <input type="text" class="form-control" name="catalog_number">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="baglog_num">Baglog Number</label>
        <input type="text" class="form-control" name="baglog_number">
      </div>
    </div>
  </div>

  <h2>Characteristics</h2>
  <div class="row">
    <div class = "col">
      <div class="form-group">
        <label for="material">Material</label>
        <select name="material" class="form-control">
          <?php $table="materials"; $column="material_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="material_type">Material Type</label>
        <select name="material_type" class="form-control">
          <?php $table="material_types"; $column="type_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="size_fraction">Size Fraction</label>
        <input type="text" class="form-control" name="size_fraction">
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="decoration">Decoration</label>
        <select name="decoration" class="form-control">
          <?php $table="decorations"; $column="decoration_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class = "col">
      <div class="form-group">
        <label for="surface_treatment">Surface Treatment</label>
        <select name="surface_treatment" class="form-control">
          <?php $table="surface_treatments"; $column="treatment_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="form">Form</label>
        <select name="form" class="form-control">
          <?php $table="forms"; $column="form_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="culture_type">Culture Type</label>
        <input type="text" class="form-control" name="culture_type">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="modification">Modification</label>
        <select name="modification" class="form-control">
          <?php $table="modifications"; $column="modification_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="notes">Notes</label>
        <input type="text" class="form-control" name="notes" maxlength="400">
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="count">Count (n)</label>
        <input type="number" class="form-control" name="count">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="weight">Weight (g)</label>
        <input type="number" class="form-control" name="weight">
      </div>
    </div>
    <div class="col">
    </div>
  </div>


  <h2>Dates</h1>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="date">Date of Entry</label>
          <input type='date' class="form-control" name="catalog_date">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="cataloger_initials">Cataloger's Initials</label>
          <input type="text" class="form-control" name="catalogers_initials">
        </div>
      </div>
      <div class="col">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="de_date">Date of Excavation</label>
          <input type="date" class="form-control" name="DE_date">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="de_initials">Excavator Initials</label>
          <input type="text" class="form-control" name="DE_initials">
        </div>
      </div>

      <div class="col">
      </div>
    </div>

    <h2>Photographs</h2>
    <div class="row">
      <div class="col">
        <label>Image Upload</label>
        <div class="form-group">
          <input type="file" class="form-control-file" name="photograph_file">
        </div>
      </div>

      <div class="col">
        <label for="photographed_boolean">Photographed? </label>
        <input type="checkbox" data-toggle="toggle" name="photographed">
      </div>

      <div class="col">

      </div>
    </div>

    <h2>Miscellaneous</h2>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Collection Issue</label>
          <input type="text" class="form-control" name="collection_issue_notes" maxlength="400" placeholder="Collection issue note">
        </div>
      </div>

      <div class="col">
        <label for="collection_issue_boolean">Collection Issue? </label>
        <input type="checkbox" data-toggle="toggle" name="collection_issue">
      </div>
      <div class="col">
      </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
