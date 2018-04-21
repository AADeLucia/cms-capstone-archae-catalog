<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Test</title>
    </head>
<body>

<?php
//include "local_db_access.php";
include "remote_db_access.php";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
$sql = "SELECT * FROM " .$table;
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
      // Print columns
      $raw_columns = array_slice($result->fetch_fields(), 1); // Get rid of "ID column"
      $columns = array();
      foreach ($raw_columns as $col){
        $formatted_name = ucwords(str_replace("_", " ", $col->name));
        $columns[] = array('field'=>$col->name, 'name'=>$formatted_name);
      }

      // Print rows
      while($row = $result->fetch_array()){
        foreach ($columns as $col) {
          printf("%s: %s", $col['name'], $row[$col['field']]);
          printf("   ");
        }
        echo nl2br("\n");
      }
    }
}

// Close connection
$conn->close();
?>


</body>
</html>
