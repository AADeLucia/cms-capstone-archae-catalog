<h1>New Catalog Entry</h1>
<h6>Please fill all required fields</h6>
<form>

<h2>Basic Information</h2>
<div class="row">
<div class="col">
<div class="form-group">
  <label for="full_catalog_number">Full Catalog Number</label>
  <input type="id" class="form-control" id="full_catalog_number">
</div>
</div>
<div class="col">
<div class="form-group">
  <label for="catalog_number">Catalog Number</label>
  <input type="number" class="form-control" id="catalog_number">
</div>
</div>
<div class="col">
<div class="form-group">
  <label for="baglog_num">Baglog Number</label>
  <input type="number" class="form-control" id="baglog_num">
</div>
</div>
</div>

<h2>Characteristics</h2>
<div class="row">
<div class = "col">
  <div class="form-group">
    <label for="material">Material</label>
    <input type="text" class="form-control" id="material">
  </div>
</div>
<div class="col">
<div class="form-group">
  <label for="material_type">Material Type</label>
  <input type="text" class="form-control" id="material_type">
</div>
</div>
<div class="col">
  <div class="form-group">
    <label for="size_fraction">Size Fraction</label>
    <input type="number" class="form-control" id="size_fractionr">
  </div>
</div>

</div>

<div class="row">
<div class="col">
  <div class="form-group">
    <label for="decoration">Decoration</label>
    <input type="text" class="form-control" id="decoration">
  </div>
</div>
<div class = "col">
  <div class="form-group">
    <label for="surface_treatment">Surface Treatment</label>
    <input type="text" class="form-control" id="surface_treatment">
  </div>
</div>
<div class="col">
<div class="form-group">
  <label for="form">Form</label>
  <input type="text" class="form-control" id="form">
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="form-group">
  <label for="culture_type">Culture Type</label>
  <input type="text" class="form-control" id="culture_type">
</div>
</div>
<div class="col">
<div class="form-group">
  <label for="modification">Modification</label>
  <input type="text" class="form-control" id="modification">
</div>
</div>
<div class="col">
  <div class="form-group">
    <label for="notes">Notes</label>
    <input type="text" class="form-control" id="Notes" maxlength="400">
  </div>
</div>

</div>


<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="count">Count (n)</label>
      <input type="number" class="form-control" id="count">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="weight">Weight (g)</label>
      <input type="number" class="form-control" id="weight">
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
    <input type='date' class="form-control" id="entry_date">
</div>
</div>
<div class="col">
<div class="form-group">
  <label for="cataloger_initials">Cataloger's Initials</label>
  <input type="text" class="form-control" id="cataloger_initials" maxlength="3">
</div>
</div>
<div class="col">
</div>
</div>

<div class="row">
<div class="col">
<div class="form-group">
  <label for="de_date">Date of Excavation</label>
  <input type="date" class="form-control" id="de_date">
</div>
</div>
<div class="col">
<div class="form-group">
  <label for="de_initials">Excavator Initials</label>
  <input type="text" class="form-control" id="de_initials" maxlength="3">
</div>
</div>

<div class="col">
</div>
</div>

<h2>Photographs</h2>
<div class="row">
<div class="col">
  <label>Image Upload</label>
  <div class="custom-file">
    <input type="image" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
  </div>
</div>

<div class="col">
    <label for="photographed_boolean">Photographed? </label>
  <input type="checkbox" data-toggle="toggle">
</div>

<div class="col">

</div>
</div>


<h2>Miscellaneous</h2>
<div class="row">
<div class="col">
  <div class="form-group">
    <label>Collection Issue</label>
    <input type="text" class="form-control" id="collection_issue_note" maxlength="400" placeholder="Collection issue note">
  </div>
</div>

<div class="col">
  <label for="collection_issue_boolean">Collection Issue? </label>
  <input type="checkbox" data-toggle="toggle">
</div>
<div class="col">
</div>

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
