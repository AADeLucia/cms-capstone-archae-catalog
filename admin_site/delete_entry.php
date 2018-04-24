<?php

/*
delete_entry.php
Deletes an entry from the 'catalog' table where id matches
*/

// connect to the database

include "remote_db_access.php";
//include "local_db_access.php";
$conn = new mysqli($servername, $username, $password, $database);

// check if the 'id' variable is set in URL, and check that it is valid

if( isset($_GET['id'])){

// get id value
$id =  "'" . $_GET['id'] . "'";

// delete the entry
$sql = "INSERT INTO test.recently_deleted select * , CURDATE() from catalog WHERE  full_catalog_number=$id;";
$sql .= "DELETE FROM test.catalog WHERE full_catalog_number=$id;";


$result = $conn->multi_query($sql);

echo "element " . $id . " has been deleted.";

sleep(3);

//$results = $conn->query($sql);

$conn->close();

}
else{
  header("Location: index.php");
}

//or die(mysql_error());


header("Location: index.php");


?>
