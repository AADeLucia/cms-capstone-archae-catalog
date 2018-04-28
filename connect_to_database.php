<?php
$local = False;

if ($local){
  $servername = "localhost";
  $username = "root";
  $password = "rcaldb";
} else {
  $servername = "compsci03.rollins.edu";
  $username = "remote_access";
  $password = "rcaldb";
}

$database = "rcalcollection";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}
?>
