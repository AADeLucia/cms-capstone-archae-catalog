<?php
include "connect_to_database.php";

// Attempt select query execution
$sql = "SELECT * FROM catalog";
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
            echo "<div class=\"card w-100\">";
            echo "<div class=\"container\">";
            echo "<div class=\"row align-items-center\">";
            echo "<div id =\"catalog_picture\" class=\"col\">";
              echo "<img class=\"catalog_thumbnail\" src=\"media/rollins_crest.png\">";
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
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<br />";
        }
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}

// Close connection
$conn->close();
?>
