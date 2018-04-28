<?php
include "../connect_to_database.php";
$sql= "SELECT * FROM baglog";

if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
          echo "<div class=\"card\">";
          echo "<div class=\"container\">";
          echo "<div class=\"row align-items-center\">";
          echo "<div class=\"col\">";
            echo "<ul class=\"list-group list-group-flush\">";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Common Name</span>: " . $row['common_name'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Provenience</span>: " . $row['provenience'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Provenience Type</span>: " . $row['provenience_type'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Recovery</span>: " . $row['recovery_inches'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Date</span>: " . $row['excavation_date'] .  "</li>";
              echo "</ul>";
          echo "</div>";
          echo "<div class=\"col\">";
            echo "<ul class=\"list-group list-group-flush\">";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Full Baglog Number</span>: " . $row['full_baglog_num'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Level</span>: " . $row['level_inches'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Unit Size</span>: " . $row['unit_size'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Associated Provenience</span>: " . $row['associated_provenience'] . "</li>";
            echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Excavators</span>: " . $row['excavator_initials'] . "</li>";
            echo "</ul>";
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
