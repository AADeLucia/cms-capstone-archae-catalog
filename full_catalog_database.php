<?php
$servername = "localhost";
$username = "root";
$password = "compSci";
$database = "test";

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
            echo "<div class=\"card\">";
            echo "<ul class=\"list-group list-group-flush\">";
              echo "<li class=\"list-group-item\">Material Type: " . $row['Material_Type'] . "</li>";
              echo "<li class=\"list-group-item\">Surface Treatment: " . $row['Surface_Treatment'] . "</li>";
              echo "<li class=\"list-group-item\">Decoration: " . $row['Decoration'] .  "</li>";
              echo "<li class=\"list-group-item\">Catalog Number: " . $row['Full_Catalog_Number'] . "</li>";
              echo "<li class=\"list-group-item\">Size Fraction: " . $row['Size_Fraction'] . "</li>";
              echo "<li class=\"list-group-item\">Material: " . $row['Material'] . "</li>";
              echo "<li class=\"list-group-item\">Form: " . $row['Form'] . "</li>";
              echo "<li class=\"list-group-item\">Modification " . $row['Modification'] . "</li>";
              echo "<li class=\"list-group-item\">Count: " . $row['Count'] . "</li>";
              echo "<li class=\"list-group-item\">Weight: " . $row['Weight'] . "</li>";
              echo "<li class=\"list-group-item\">Culture Type: " . $row['Culture_Type'] . "</li>";
              echo "<li class=\"list-group-item\">Notes: " . $row['Notes'] . "</li>";
            echo "</ul>";
            echo "</div>";
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