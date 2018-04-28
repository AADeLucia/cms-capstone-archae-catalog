<?php
include "head.php";
echo "<head><title>Add to Reference Table</title><style>body{background-color: white;};</style></head>";
include "../connect_to_database.php";

// Get passed variables
// Store in key value array for easy insert statement building
$insert_values = array();
foreach ($_POST as $key => $value){
  if(!empty($value)){
    if($key=="collection_issue" || $key=="photographed"){
      $insert_values[$key] = '1';
    } else {
      $insert_values[$key] = "'" . $value . "'";
    }
  }
}
// Check for file upload
if ($_FILES["photograph_file"]["size"]!=0){
  $insert_values["photograph_file"] = substr($insert_values['full_catalog_number'],0,-1). "." .pathinfo($_FILES['photograph_file']['name'], PATHINFO_EXTENSION). "'";
}

// Prepare insert statement
$sql = "INSERT into catalog (";
  foreach($insert_values as $key => $val){
  $sql .= $key . ",";
  }
  $sql = substr($sql, 0, -1) . ")"; // remove last comma
  $sql .= " VALUES (";
  foreach ($insert_values as $key => $val){
    $sql .= $val . ",";
  }
  $sql = substr($sql, 0, -1) . ")"; // remove last comma

  // Execute statement
  if($result=$conn->query($sql)){
    echo "Entry was successfully added.<br>";

    // Upload photo
    if (array_key_exists('photograph_file', $insert_values)){
      include "upload_artifact_photo.php";
      echo upload_artifact_photo($_FILES, substr($insert_values['photograph_file'], 1, -1));
    }
    echo "<a class='btn btn-primary' href='index.php' role='button'>Go to Full Catalog</a>";
    echo "<a class='btn btn-primary' href='add_entry.php' role='button'>Add another entry</a>";
  } else{
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
  }

  // Close connection
  $conn->close();
  ?>
