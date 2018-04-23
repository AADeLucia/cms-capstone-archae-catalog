<?php
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
      // Begin table

      echo "<table id=\"catalog_browse\" class=\"table\">";
      // Create the columns
      $raw_columns = $result->fetch_fields();
      $columns = array();
      foreach ($raw_columns as $col){
        $formatted_name = ucwords(str_replace("_", " ", $col->name));
        $columns[] = array('field'=>$col->name, 'name'=>$formatted_name);
      }
      echo "<tr>";
      echo "<th>Delete</th>";
      echo "<th>Edit</th>";
        foreach ($columns as $col){
          echo "<th>".$col['name']."</th>";
        }
      echo "</tr>";

        while($row = $result->fetch_array()){
          // Build table row
          echo "<tr>";

          //Add modification buttons
          $id = $row['full_catalog_number'];
          echo "<td><a href='delete_entry.php?id=" . $id. "' class=\"btn btn-primary\">Delete</a></td>";
          echo "<td><a href='edit_entry_form.php?id=" . $id. "' class=\"btn btn-primary\">Edit</a></td>";

          // Add column fields
          foreach ($columns as $col){
            echo "<td>" . $row[$col['field']] . "</td>";
          }
          echo "</tr>";
        }

        // End table
        echo "</table>";

        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "<br />ERROR: Could not execute \"$sql\". " . $conn->error;
}
?>
