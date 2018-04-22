<?php
include "local_db_access.php";
//include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

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
