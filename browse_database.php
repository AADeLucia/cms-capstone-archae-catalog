<?php
//include "local_db_access.php";
include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

<<<<<<< HEAD
// Create individual statements
$stmts = array();
foreach ($selections as $field=>$values){
  // Build a select statement for each field query
  if ($values) {
    $stmt = "SELECT * FROM catalog WHERE " . $field . " in (";
    foreach ($values as $v){
      $stmt .= "\"$v\",";
    }
    $stmt = substr($stmt, 0, -1) . ")"; // remove last comma
    $stmts[] = $stmt;
  }
}

// Join the statements into one query
$sql = "SELECT * FROM ";
$table_counter = 1;
foreach ($stmts as $s){
  $sql .= "(" . $s . ") as t" . $table_counter . " INNER JOIN ";
  $table_counter++;
}
// Remove the last "inner join"
$sql = substr($sql, 0, -12);

// Finish query
$sql .= " on ";
for ($i=1; $i < $table_counter-1; $i++){
  $sql .= " t" . ($i) . ".full_catalog_number=t" . ($i+1) . ".full_catalog_number AND ";
}
// Remove last "and"
$sql = substr($sql, 0, -5);

// Execute statement and print rows
include "build_cards_user_view.php";
=======
// Prepare and bind statement
//$stmt = $conn->prepare("SELECT * FROM Catalog_tbl WHERE Material LIKE ? and Material_Type LIKE ? and Form LIKE ? and Surface_Treatment LIKE ? and Decoration LIKE ? and Modification LIKE ?");
//$stmt->bind_param("ssssss", $material, $material_type, $form, $surface_treatment, $decoration, $modification);

// Set values
// Use SQL wildcard (%) to replace "All" option
if($_POST['material']=="All"){
  $material = "\"%\" or Material is null";
} else {
  $material = "\"" . $_POST['material'] . "\"";
}
if($_POST['material_type']=="All"){
  $material_type = "\"%\" or Material_Type is null";
} else {
  $material_type = "\"" . $_POST['material_type'] . "\"";
}
if($_POST['form']=="All"){
  $form = "\"%\" or Form is null";
} else {
  $form = "\"" . $_POST['form'] . "\"";
}
if($_POST['surface_treatment']=="All"){
  $surface_treatment = "\"%\" or Surface_Treatment is null";
} else {
  $surface_treatment = "\"" . $_POST['surface_treatment'] . "\"";
}
if($_POST['decoration']=="All"){
  $decoration = "\"%\" or Decoration is null";
} else {
  $decoration = "\"" . $_POST['decoration'] . "\"";
}
if($_POST['modification']=="All"){
  $modification = "\"%\" or Modification is null";
} else {
  $modification = "\"" . $_POST['modification'] . "\"";
}
//echo $material, $material_type, $form, $surface_treatment, $decoration, $modification;

// Attempt statement execution
$sql = "SELECT * FROM Catalog_tbl WHERE Material LIKE " . $material . " and Material_Type LIKE " . $material_type . " and Form LIKE " .$form." and Surface_Treatment LIKE ".$surface_treatment." and Decoration LIKE ".$decoration." and Modification LIKE ".$modification;
echo nl2br("\n" . $sql);
if($result = $conn->query($sql)){
//if($result = $stmt->execute()){
echo nl2br("\n" . "Returned " . $result->num_rows . " rows");
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
            echo "<div class=\"card w-100\">";
            echo "<div class=\"container\">";
            echo "<div class=\"row align-items-center\">";
            echo "<div id =\"catalog_picture\" class=\"col\">";
              echo "<img class=\"catalog_thumbnail\" src=\"rollins_crest.png\">";
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
        $stmt->close();
    } else{
        echo "\nNo records matching your query were found.";
    }
} else{
    echo "<br />ERROR: Could execute \"$sql\". " . $conn->error;
}
>>>>>>> 92400a3e0e5957af5eb5c333ebf4b9373efb670f

// Close connection
$conn->close();
?>
