<?php
include "head.php";
echo "<head><title>Add to Reference Table</title><style>body{background-color: white;};</style></head>";
include "../connect_to_database.php";

// Get Variables
// IMPORTANT: Sore variables in same order as columns in table
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
    echo "Entry was successfully added.";
    echo "<br />";
    echo "<a class='btn btn-primary' href='index.php' role='button'>Go to Full Catalog</a>";
    echo "<a class='btn btn-primary' href='add_entry.php' role='button'>Add another entry</a>";

    // Upload photo
    print_r($_FILE);
    include "upload_artifact_photo.php";
    $upload_status = upload_artifact_photo($_FILE);
    echo $upload_status;
  } else{
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
  }

  // Close connection
  $conn->close();
  ?>
