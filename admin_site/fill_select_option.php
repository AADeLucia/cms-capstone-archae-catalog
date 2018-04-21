<?php

//include "local_db_access.php";
include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

// Attempt select query execution
$sql = "SELECT DISTINCT " . $column . " FROM " . $table . " ORDER BY " . $column;
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
          echo "<option>" . $row[$column] . "</option>";
        }
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
  }
?>
