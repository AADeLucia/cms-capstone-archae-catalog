<?php
include "remote_db_access.php";

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
        echo "<table id = \"catalog_browse\" class=\"table\">";
            echo "<tr>";
                echo "<th>Catalog Number</th>";
                echo "<th>Size Fraction</th>";
                echo "<th>Material</th>";
                echo "<th>Material Type</th>";
                echo "<th>Form</th>";
                echo "<th>Decoration</th>";
                echo "<th>Surface Treatment</th>";
                echo "<th>Modification</th>";
                echo "<th>Count</th>";
                echo "<th>Weight</th>";
                echo "<th>Culture Type</th>";
                echo "<th>Notes</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['Full_Catalog_Number'] . "</td>";
                echo "<td>" . $row['Size_Fraction'] . "</td>";
                echo "<td>" . $row['Material'] . "</td>";
                echo "<td>" . $row['Material_Type'] . "</td>";
                echo "<td>" . $row['Form'] . "</td>";
                echo "<td>" . $row['Decoration'] . "</td>";
                echo "<td>" . $row['Surface_Treatment'] . "</td>";
                echo "<td>" . $row['Modification'] . "</td>";
                echo "<td>" . $row['Count (n)'] . "</td>";
                echo "<td>" . $row['Weight (g)'] . "</td>";
                echo "<td>" . $row['Culture _Type'] . "</td>";
                echo "<td>" . $row['Notes'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
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
