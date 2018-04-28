<?php
include "head.php";
echo "<head><title>Add to Reference Table</title><style>body{background-color: white;};</style></head>";
include "../connect_to_database.php";

// Create insert statement
$table = $_GET['table'];
$sql = "INSERT into " . $table . " (";
foreach ($_POST as $key => $value){
  $sql .= $key . ",";
}
$sql = substr($sql, 0, -1) . ")"; // remove last comma
$sql .= " VALUES (";
foreach ($_POST as $key => $value){
  $sql .= "'" . $value . "',";
}
$sql = substr($sql, 0, -1) . ")"; // remove last comma

if($result = $conn->query($sql)){
  echo "Record added successfully!";
  echo "<br />";
  echo "<a class='btn btn-primary' href='references.php' role='button'>Return to References</a>";
} else {
  echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
}
$conn->close();
?>
