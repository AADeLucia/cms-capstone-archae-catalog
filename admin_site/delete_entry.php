<?php

/*
delete_entry.php
Deletes an entry from the 'catalog' table where id matches
*/

// connect to the database

include "remote_db_access.php";
$conn = new mysqli($servername, $username, $password, $database);

// check if the 'id' variable is set in URL, and check that it is valid

if( isset($_GET['id'])){

// get id value
$id =  "'" . $_GET['id'] . "'";

// delete the entry
echo "element " . $id . " has been deleted.";

$result = $conn->query("DELETE FROM catalog WHERE full_catalog_number=$id");

}
else{
  header("Location: index.php");
}

//or die(mysql_error());

//header("Location: index.php");


?>
