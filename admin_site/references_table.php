<?php
include "../connect_to_database.php";

$sql = "SELECT * FROM " .$table . " ORDER BY  " . $col  ;
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
      //Begin table
      echo "<table id=\"catalog_browse\" class=\"table\">";
      // Print columns
      $raw_columns = array_slice($result->fetch_fields(), 1); // Get rid of "ID column"
      $columns = array();
      foreach ($raw_columns as $col){
        $formatted_name = ucwords(str_replace("_", " ", $col->name));
        $columns[] = array('field'=>$col->name, 'name'=>$formatted_name);
      }

      //Print header names
      echo "<tr>";
        foreach ($columns as $col){
          echo "<th>".$col['name']."</th>";
      }
      echo "</tr>";

      // Print rows
      while($row = $result->fetch_array()){
        echo "<tr>";
        //Add column fields
        foreach ($columns as $col){
          echo "<td>" . $row[$col['field']] . "</td>";
        }
        echo "</tr>";
    }
    // End table
    echo "</table>";

  }
}

// Close connection
$conn->close();
?>
