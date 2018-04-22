<h1>New Bag Log Entry</h1>
<h6>Please fill all required fields</h6>

<form>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="full_baglog_num">Full Baglog Number</label>
      <input type="text" class="form-control" id="full_baglog_num">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="common_name">Common Name</label>
      <input type="text" class="form-control" id="common_name">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="state_site_num">State Site Number</label>
      <input type="text" class="form-control" id="state_site_num">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="site_baglog_num">Site Baglog Number</label>
      <input type="number" class="form-control" id="site_baglog_num">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="provenience">Provenience</label>
      <input type="text" class="form-control" id="provenience">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="associated_provenience">Associated Provenience</label>
      <input type="text" class="form-control" id="associated_provenience">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="level_inches">Level (inches)</label>
      <input type="text" class="form-control" id="level_inches">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="provenience_type">Provenience Type</label>
      <input type="text" class="form-control" id="provenience_type">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="recovery_inches">Recovery (inches)</label>
      <input type="number" class="form-control" id="recovery_inches">
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="excavation_date">Excavation Date</label>
      <input type="number" class="form-control" id="excavation_date">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="unit_size">Unit Size</label>
      <input type="text" class="form-control" id="unit_size">
    </div>
  </div>
  <div class="col">
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="issue">Issue</label>
      <input type="checkbox" class="form-control" id="issue">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="issue_defined">Issue Defined</label>
      <input type="text" class="form-control" id="issue_defined">
    </div>
  </div>
  <div class="col">
  </div>
</div>

<div>
  <button type="submit" class="btn btn-primary" action="baglog_add_sql.php">Submit</button>
</div>

</form>
