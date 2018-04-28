<?php
include 'head.php';
if($result = $conn->query($sql)){
echo "Returned " . $result->num_rows . " rows";
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
          echo "<div class=\"card w-100\">";
          echo "<div class=\"container\">";
          echo "<div class=\"row align-items-center\">";
          echo "<div id =\"catalog_picture\" class=\"col\">";
          // Use image if provided image
          // else use default
          if ($row['photographed']){
            echo "<img class='catalog_thumbnail' src='media/artifacts/" .$row['photograph_file']. "'>";
          } else {
            echo "<img class='catalog_thumbnail' src='media/rollins_crest.png'>";
          }
          echo "</div>";
          echo "<div class=\"col\">";
            echo "<ul class=\"list-group list-group-flush\">";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Catalog Number</span>: " . $row['full_catalog_number'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Material</span>: " . $row['material'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Material Type</span>: " . $row['material_type'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Form</span>: " . $row['form'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Decoration</span>: " . $row['decoration'] .  "</li>";
              echo "</ul>";
          echo "</div>";
          echo "<div class=\"col\">";
            echo "<ul class=\"list-group list-group-flush\">";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Surface Treatment</span>: " . $row['surface_treatment'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Modification</span>: " . $row['modification'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Count</span>: " . $row['count'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Weight</span>: " . $row['weight'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Culture Type</span>: " . $row['culture_type'] . "</li>";
            echo "</ul>";
          echo "</div>";
          echo "<div class=\"col-2\">";
          echo"<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#requestModal'>";
          echo "Request";
          echo "</button>";
          echo "<div class='modal fade' id='requestModal'>";
            echo "<div class= 'modal-dialog'>";
              echo"<div class='modal-content'>";
                echo"<!-- Modal Header -->";
                echo"<div class='modal-header'>";
                  echo"<h4 class='modal-title'>Request Artifact</h4>";
                  echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
                echo"</div>";
                echo"<!--Modal Content-->";
                echo"<div class='modal-body'>";
                echo"<form name='contact_form' method='post' action='contact_send_email.php'>";
                echo"<table>";
                echo"<tr>";
                 echo"<td valign='top'>";
                  echo"<label for='first_name'>First Name *</label>";
                 echo"</td>";
                 echo"<td valign='top'>";
                  echo"<input  required type='text' name='first_name' maxlength='50' size='30'>";
                 echo"</td>";
                echo"</tr>";
                echo"<tr>";
                 echo"<td valign='top'>";
                  echo"<label for='last_name'>Last Name *</label>";
                 echo"</td>";
                 echo"<td valign='top'>";
                  echo"<input  required type='text' name='last_name' maxlength='50' size='30'>";
                 echo"</td>";
                echo"</tr>";
                echo"<tr>";
                 echo"<td valign='top'>";
                  echo"<label for='email'>Email Address *</label>";
                 echo"</td>";
                 echo"<td valign='top'>";
                  echo"<input  required type='text' name='email' maxlength='80' size='30'>";
                 echo"</td>";
                echo"</tr>";
                echo"<tr>";
                 echo"<td valign='top'>";
                  echo"<label for='telephone'>Telephone Number</label>";
                 echo"</td>";
                 echo"<td valign='top'>";
                  echo"<input  type='text' name='telephone' maxlength='30' size='30'>";
                 echo"</td>";
                echo"</tr>";
                echo"<tr>";
                 echo"<td valign='top'>";
                  echo"<label for='comments'>Comments *</label>";
                 echo"</td>";
                 echo"<td valign='top'>";
                  echo"<textarea  required name='comments' maxlength='1000' cols='25' rows='6'></textarea>";
                 echo"</td>";
                echo"</tr>";
                echo"<tr>";
                 echo"<td colspan='2' style='text-align:right'>";
                  echo"<input class='btn btn-primary' type='submit' value='Submit'>";
                 echo"</td>";
                echo"</tr>";
                echo"</table>";
                echo"</form>";
                echo"</div>";
              echo"</div>";
            echo"</div>";
          echo"</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "<br />";
        }
        // Free result set
        $result->free();
      } else{
        echo nl2br("\nNo records matching your query were found.");
      }
} else{
echo nl2br("ERROR: Could not execute \"$sql\". " . $conn->error);
}
?>
