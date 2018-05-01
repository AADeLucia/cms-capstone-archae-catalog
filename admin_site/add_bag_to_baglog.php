<?php
include "head.php";
echo "<head><title>Add to Reference Table</title><style>body{background-color: white;};</style></head>";
include "../connect_to_database.php";

// Get Variables
// IMPORTANT: Store variables in same order as columns in table
$insert_values = array();
foreach ($_POST as $key => $value){
  if(!empty($value)){
    if($key=="issue"){
      $insert_values[$key] = '1';
    } else {
      $insert_values[$key] = "'" . $value . "'";
    }
  }
}

// Prepare insert statement
$sql = "INSERT into baglog (";
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

    echo "<a class='btn btn-primary' href='baglog_browse.php' role='button'>Go to Bag Log</a>";
    echo "<a class='btn btn-primary' href='add_bag.php' role='button'>Add another entry</a>";
  } else{
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
  }

  // Close connection
  $conn->close();
  ?>
