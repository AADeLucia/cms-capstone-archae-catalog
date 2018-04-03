<?php
include "local_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

// Attempt select query execution
$sql = "SELECT * FROM Catalog_tbl";
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
                echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Catalog Number</span>: " . $row['Full_Catalog_Number'] . "</li>";
                echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Material</span>: " . $row['Material'] . "</li>";
                echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Material Type</span>: " . $row['Material_Type'] . "</li>";
                echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Form</span>: " . $row['Form'] . "</li>";
                echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Decoration</span>: " . $row['Decoration'] .  "</li>";
                echo "</ul>";
            echo "</div>";
            echo "<div class=\"col\">";
              echo "<ul class=\"list-group list-group-flush\">";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Surface Treatment</span>: " . $row['Surface_Treatment'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Modification</span>: " . $row['Modification'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Count</span>: " . $row['Count (n)'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Weight</span>: " . $row['Weight (g)'] . "</li>";
              echo "<li class=\"list-group-item\"><span class=\"catalog_field\">Culture Type</span>: " . $row['Culture_Type'] . "</li>";
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
