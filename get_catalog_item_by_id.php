<?php
include "local_db_access.php";
//include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

// Prepare
$sql = "SELECT * FROM catalog WHERE full_catalog_number=". "\"". $catalog_number ."\"";

// Execute statement and print rows
include "build_cards_user_view.php";

// Close connection
$conn->close();
?>
