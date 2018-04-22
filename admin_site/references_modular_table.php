<?php
//include "local_db_access.php";
include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

$sql = "SELECT * FROM " .$table ;
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
      // Print columns
      $raw_columns = array_slice($result->fetch_fields(), 1); // Get rid of "ID column"
      $columns = array();
      foreach ($raw_columns as $col){
        $formatted_name = ucwords(str_replace("_", " ", $col->name));
        $columns[] = array('field'=>$col->name, 'name'=>$formatted_name);
      }

      //Print header names
        foreach ($columns as $col){
          echo "<div class='form-group'>";
          echo "<label>" .$col['name']. "</label>";
          echo "<input type='text' class='form-control' name=" .$col['field'].">";
          echo "</div>";
      }
  }
} else {
  echo "error";
}

// Close connection
$conn->close();
?>
