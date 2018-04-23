<?php
include "connect_to_database.php";

// Attempt select query execution
$sql = "SELECT * FROM catalog";

include "build_table_admin_view.php";

// Close connection
$conn->close();
?>
