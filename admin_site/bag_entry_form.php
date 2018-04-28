<h1>New Bag Log Entry</h1>
<h6>Please fill all required fields</h6>
<form action="add_bag_to_baglog.php" method="post" enctype="multipart/form-data">

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="full_baglog_num">Full Baglog Number*</label>
      <input type="text" class="form-control" name="full_baglog_num" required>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="common_name">Common Name</label>
      <input type="text" class="form-control" name="common_name">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="state_site_num">State Site Number</label>
      <input type="text" class="form-control" name="state_site_num">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="site_baglog_num">Site Baglog Number</label>
      <input type="number" class="form-control" name="site_baglog_num">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="provenience">Provenience</label>
      <input type="text" class="form-control" name="provenience">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="level_inches">Level (inches)</label>
      <input type="text" class="form-control" name="level_inches">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="provenience_type">Provenience Type</label>
      <input type="text" class="form-control" name="provenience_type">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="recovery_inches">Recovery (inches)</label>
      <input type="number" class="form-control" name="recovery_inches">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="associated_provenience">Associated Provenience</label>
      <input type="text" class="form-control" name="associated_provenience">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="excavation_date">Excavation Date</label>
      <input type="number" class="form-control" name="excavation_date">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="excavation_date">Excavator's Initials</label>
      <input type="number" class="form-control" name="excavator_initials">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="unit_size">Unit Size</label>
      <input type="text" class="form-control" name="unit_size">
    </div>
  </div>
  <div class="col">
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="issue">Issue</label>
      <input type="checkbox" class="form-control" name="issue">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="issue_defined">Issue Defined</label>
      <input type="text" class="form-control" name="issue_defined">
    </div>
  </div>
  <div class="col">
  </div>
</div>

<div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
