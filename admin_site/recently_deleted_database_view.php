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
      echo "<th>Restore</th>";
        foreach ($columns as $col){
          echo "<th>".$col['name']."</th>";
        }
      echo "</tr>";

        while($row = $result->fetch_array()){
          // Build table row
          echo "<tr>";

          //Add modification buttons
          $id = $row['full_catalog_number'];
          echo "<td><a href='#' data-toggle=\"modal\" data-target=\"#myModal" . $id . "\"class=\"btn btn-primary\">Restore</a></td>";

          // Modal for confirmation of restore

          echo "<div class=\"modal fade\" id='myModal" . $id . "' tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Are you sure?</h4>
                      </div>
                      <div class=\"modal-body\">
                        Are you sure you want to delete?
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
                        <a href= 'restore_entry.php?id=" . $id . "' class=\"btn btn-primary\">Restore</a>
                      </div>
                    </div>
                  </div>
                </div>";

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
    echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}
?>
