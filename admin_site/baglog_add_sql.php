<?php
include "connect_to_database.php";

$full_baglog_num = $_POST['full_baglog_num']);
$common_name = $_POST['common_name']);
$state_site_num = $_POST['state_site_num']);
$site_baglog_num = $_POST['site_baglog_num']);
$provenience = $_POST['provenience']);
$level_inches = $_POST['level_inches']);
$provenience_type = $_POST['provenience_type']);
$recovery_inches = $_POST['recovery_inches']);
$associated_provenience = $_POST['associated_provenience']);
$excavation_date = $_POST['excavation_date']);
$unit_size = $_POST['unit_size']);
$issue = $_POST['issue']);
$issue_defined = $_POST['issue_defined']);

// Prepare
$sql = "INSERT INTO baglog (full_baglog_num, common_name, state_site_num, site_baglog_num,
provenience, level_inches, provenience_type, recovery_inches, associated_provenience,
excavation_date, unit_size, issue, issue_defined) VALUES " . "(" . $full_baglog_num . "," . $common_name . "," .
$state_site_num . "," . $site_baglog_num . "," . $provenience . "," . $level_inches . "," . $provenience_type . "," .
$recovery_inches . "," . $associated_provenience . "," . $excavation_date . "," . $unit_size . "," . $issue . "," . $issue_defined . ")";

if($result = $conn->query($sql)){
  echo "Success";
} else{
  echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}

// Close connection
$conn->close();
?>
