<?php
$servername = "localhost";
$username = "root";
$password = "compSci";

//Create connection
$conn = new mysqli($servername,$username,$password);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

echo "Connected successfully!";

// Attempt select query execution
$sql = "SELECT Full_Catalog_Number,Baglog_Number FROM Catalog_tbl";
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Catalog Number</th>";
                echo "<th>Baglog Number</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['Full_Catalog_Number'] . "</td>";
                echo "<td>" . $row['Baglog_Number'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>