<?php
include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

// Attempt select query execution
$sql = "SELECT * FROM catalog";

include "build_table_admin_view.php";

// Close connection
$conn->close();
?>
