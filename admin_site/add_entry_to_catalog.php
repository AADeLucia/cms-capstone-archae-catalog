<?php
// Get Variables
// IMPORTANT: Sore variables in same order as columns in table
$values = array();
$values[] = $_POST["full_catalog_number"];
$values[] = $_POST["baglog_number"];
$values[] = $_POST["catalog_number"];
$values[] = $_POST["size_fraction"];
$values[] = $_POST["material"];
$values[] = $_POST["material_type"];
$values[] = $_POST["form"];
$values[] = $_POST["decoration"];
$values[] = $_POST["surface_treatment"];
$values[] = $_POST["modification"];
$values[] = $_POST["count"];
$values[] = $_POST["weight"];
$values[] = $_POST["culture_type"];
$values[] = $_POST["notes"];
$values[] = $_POST["collection_issue"];
$values[] = $_POST["collection_issue_note"];
$values[] = $_POST["cataloger_initials"];
$values[] = $_POST["entry_date"];
$values[] = $_POST["de_date"];
$values[] = $_POST["de_intials"];
$values[] = $_POST["photographed"];
$values[] = $_POST["photo_file"];

echo count($values);
foreach ($values as $val){
  echo $val;
}

return;

include "local_db_access.php";
//include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

// Prepare insert statement
$sql = "INSERT into catalog VALUES ";
foreach($values as $val){
  $sql .= $val;
}
$sql .= ")";

// Execute statement
if($result=$conn->query($sql)){
  echo "added entry";
} else{
    echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}

// Close connection
$conn->close();
?>
