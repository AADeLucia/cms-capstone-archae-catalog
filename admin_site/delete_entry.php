<?php

/*
delete_entry.php
Deletes an entry from the 'catalog' table where id matches
*/

// connect to the database

include "remote_db_access.php";

// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))
{

// get id value
$id = $_GET['id'];

// delete the entry

$result = mysql_query("DELETE FROM catalog WHERE Full_Catalog_Number=$id")

or die(mysql_error());


?>
