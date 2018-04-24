<?php
include "connect_to_database.php";

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
