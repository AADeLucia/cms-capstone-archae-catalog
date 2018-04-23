<?php
include "connect_to_database.php";

$sql = "SELECT * FROM " .$table;
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
      // Print columns
      $raw_columns = array_slice($result->fetch_fields(), 1); // Get rid of "ID column"
      $columns = array();
      foreach ($raw_columns as $col){
        $formatted_name = ucwords(str_replace("_", " ", $col->name));
        $columns[] = array('field'=>$col->name, 'name'=>$formatted_name);
      }

      // Print rows
      while($row = $result->fetch_array()){
        foreach ($columns as $col) {
          printf("%s: %s", $col['name'], $row[$col['field']]);
          printf("   ");
        }
        echo nl2br("\n");
      }
    }
}

// Close connection
$conn->close();
?>
