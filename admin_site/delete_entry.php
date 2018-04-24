<?php
/*
delete_entry.php
Deletes an entry from the 'catalog' table where id matches
*/

include "head.php";
echo "<head><title>Delete Entry</title><style>body{background-color: white;};</style></head>";

// Connect to the database
include "connect_to_database.php";

// Check if the 'id' variable is set in URL, and check that it is valid
if(isset($_GET['id'])){
  // Get id value
  $id =  "'" . $_GET['id'] . "'";
  $sql = "INSERT INTO recently_deleted SELECT *,CURDATE() FROM catalog WHERE full_catalog_number= $id;";
  $sql .= "DELETE FROM catalog WHERE full_catalog_number=$id;";

  // Delete the entry
  if($result = $conn->multi_query($sql)){
    echo "Element " . $id . " has been deleted.";
    echo "<br />";
    echo "<a class='btn btn-primary' href='index.php' role='button'>Go to Full Catalog</a>";
  } else {
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
  }
} else{
  header("Location: index.php");
}
?>
