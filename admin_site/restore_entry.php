<?php
/*
restore_entry.php
Restores a previously deleted entry to full catalog
*/

include "head.php";
echo "<head><title>Restore Entry</title><style>body{background-color: white;};</style></head>";

// Connect to the database
include "connect_to_database.php";

// Check if the 'id' variable is set in URL, and check that it is valid
if(isset($_GET['id'])){
  // Get id value
  $id =  "'" . $_GET['id'] . "'";
  $sql = "CREATE TEMPORARY TABLE t1 (SELECT * FROM recently_deleted WHERE full_catalog_number = $id);";
  $sql .= "ALTER TABLE t1 DROP COLUMN date_deleted;";
  $sql .= "INSERT INTO catalog (SELECT * FROM t1 WHERE full_catalog_number = $id);";
  $sql .= "DELETE FROM recently_deleted WHERE full_catalog_number = $id;";
  $sql .= "DROP TABLE t1;";

  // Restore the entry
  if($result = $conn->multi_query($sql)){
    echo "Element " . $id . " has been restore.";
    echo "<br/>";
    echo "<a class='btn btn-primary' href='index.php' role='button'>Go to Full Catalog</a>";
  } else {
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
  }
} else{
  header("Location: index.php");
}
?>
