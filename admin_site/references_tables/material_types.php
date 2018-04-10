<?php
include "remote_db_access.php";
//Create connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}

//Attempt to select query execution
$sql = "SELECT * FROM material_types";
if ($result = $conn->query($sql)){
  if($result->num_rows > 0){
    echo "<table id = \"catalog_browse\" class=\"table\">";
        echo "<tr>";
            echo "<th><u>Material Type</th>";
            echo "<th><u>Associated Material</th>";
            echo "<th><u>Description</th>";
        echo "</tr>";

    while($row = $result->fetch_array()){

        echo "<tr>";
            echo "<td>" . $row['type_name'] . "</td>";
            echo "<td>" . $row['associated_material'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    //Free result gmp_set
    $result->free();
  } else{
      echo "No records matching your query were found.";
  }
} else{
  echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}

//Close connection
$conn->close();
 ?>
