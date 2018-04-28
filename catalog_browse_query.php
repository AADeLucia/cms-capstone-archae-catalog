<?php
include "connect_to_database.php";

if ($is_empty){
  $sql = "SELECT * FROM catalog";
} else {
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
}

// Execute statement and print rows
include "build_cards_user_view.php";

// Close connection
$conn->close();
?>
