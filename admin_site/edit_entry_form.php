<?php
$id=  $_GET['id'];
include "../connect_to_database.php";

// Prepare
$sql = "SELECT * FROM catalog WHERE full_catalog_number='$id'";
$current_values = array();
if($result = $conn->query($sql)){
  $rows = $result->fetch_array(MYSQLI_ASSOC);
  } else{
       echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error ;
      }
?>

<h1>Edit Catalog Entry</h1>
<h6>Please fill all required fields</h6>
<form action="edit_entry_in_catalog.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
  <h2>Basic Information</h2>
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="full_catalog_number">Full Catalog Number</label>
        <input type="text" class="form-control" name="full_catalog_number" value = <?php echo"\"$rows[full_catalog_number]\"";?> >
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="catalog_number">Catalog Number</label>
        <input type="text" class="form-control" name="catalog_number" value = <?php echo"\"$rows[catalog_number]\"";?>>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="baglog_num">Baglog Number</label>
        <input type="text" class="form-control" name="baglog_number" value = <?php echo"\"$rows[baglog_number]\"";?>>
        <?php echo $row[size_fraction];?>
      </div>
    </div>
  </div>
<?php echo $row[size_fraction];?>
  <h2>Characteristics</h2>
  <div class="row">
    <div class = "col">
      <div class="form-group">
        <?php echo $row[size_fraction];?>
        <label for="material">Material</label>
        <select name="material" class="form-control">
          <?php echo '<option selected>'.$rows['material'].'</option>'; ?>
          <?php $table="materials"; $column="material_name"; include "fill_select_option.php"; ?>
        </select>
        <?php echo $rows[size_fraction];?>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <?php echo $row[size_fraction];?>
        <label for="material_type">Material Type</label>
        <select name="material_type" class="form-control">
          <?php echo '<option selected>'.$rows['material_type'].'</option>'; ?>
          <?php $table="material_types"; $column="type_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="size_fraction">Size Fraction: </label>
        <input type="text" class="form-control" name="size_fraction" value = <?php echo"\"$rows[size_fraction]\"";?> >
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="decoration">Decoration</label>
        <select name="decoration" class="form-control">
        <?php echo '<option selected>'.$rows['decoration'].'</option>'; ?>
        <?php $table="decorations"; $column="decoration_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class = "col">
      <div class="form-group">
        <label for="surface_treatment">Surface Treatment</label>
        <select name="surface_treatment" class="form-control">
          <?php echo '<option selected>'.$rows['surface_treatment'].'</option>'; ?>
          <?php $table="surface_treatments"; $column="surface_treatment_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="form">Form</label>
        <select name="form" class="form-control">
          <?php echo '<option selected>'.$rows['form'].'</option>'; ?>
          <?php $table="forms"; $column="form_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="culture_type">Culture Type</label>
        <input type="text" class="form-control" name="culture_type" value = <?php echo"\"$rows[culture_type]\"";?>>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="modification">Modification</label>
        <select name="modification" class="form-control">
          <?php echo '<option selected>'.$rows['modification'].'</option>'; ?>
          <?php $table="modifications"; $column="modification_name"; include "fill_select_option.php"; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="notes">Notes</label>
        <input type="text" class="form-control" name="notes" maxlength="400" value = <?php echo"\"$rows[notes]\"";?>>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="count">Count (n)</label>
        <input type="number" class="form-control" name="count_(n)" value = <?php echo"\"$rows[count]\"";?>>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="weight">Weight (g)</label>
        <input type="number" class="form-control" name="weight_(g)" value = <?php echo"\"$rows[weight]\"";?>>
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
          <input type='date' class="form-control" name="catalog_date" value = <?php echo"\"$rows[catalog_date]\"";?> >
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="cataloger_initials">Cataloger's Initials</label>
          <input type="text" class="form-control" name="catalogers_initials" value = <?php echo"\"$rows[catalogers_initials]\"";?> >
        </div>
      </div>
      <div class="col">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="de_date">Date of Excavation</label>
          <input type="date" class="form-control" name="DE_date" value = <?php echo"\"$rows[de_date]\"";?> >
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="de_initials">Excavator Initials</label>
          <input type="text" class="form-control" name="DE_initials" value = <?php echo"\"$rows[de_initials]\"";?> >
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
          <input type="file" class="form-control-file" name="photograph_file" value = <?php echo"\"$rows[photograph_file]\"";?> >
        </div>
      </div>

      <div class="col">
        <label for="photographed_boolean">Photographed? </label>
        <input type="checkbox" data-toggle="toggle" name="photographed" value = <?php echo"\"$rows[photographed]\"";?>>
      </div>

      <div class="col">

      </div>
    </div>

    <h2>Miscellaneous</h2>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Collection Issue</label>
          <input type="text" class="form-control" name="collection_issue_notes" maxlength="400" placeholder="Collection issue note" >
        </div>
      </div>

      <div class="col">
        <label for="collection_issue_boolean">Collection Issue? </label>
        <input type="checkbox" data-toggle="toggle" name="collection_issue" >
      </div>
      <div class="col">
      </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
