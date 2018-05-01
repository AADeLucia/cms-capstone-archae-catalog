<?php
include "head.php";
echo "<head><title>Edit Entry</title><style>body{background-color: white;};</style></head>";
include "../connect_to_database.php";

// Get Variables
// IMPORTANT: Store variables in same order as columns in table

$id= "'" . $_GET['id'] . "'";
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
// print_r($insert_values);


// // Prepare insert statement
  $sql = "UPDATE catalog SET ";
   foreach($insert_values as $key => $val){
     $sql .= $key . "=" . $val . ", ";
   }
  $sql = substr($sql, 0, -2); // remove last comma
  $sql .= " WHERE full_catalog_number=$id;";
  //echo $sql;
  // Execute statement
   if($result=$conn->query($sql)){
     echo "Entry was successfully updated.<br>";

  //   // Upload photo
  //   if (array_key_exists('photograph_file', $insert_values)){
  //     include "upload_artifact_photo.php";
  //     echo upload_artifact_photo($_FILES, substr($insert_values['photograph_file'], 1, -1));
  //   }
     echo "<a class='btn btn-primary' href='index.php' role='button'>Go to Full Catalog</a>";

   } else{
     echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
   }

  // Close connection
  $conn->close();
  ?>
