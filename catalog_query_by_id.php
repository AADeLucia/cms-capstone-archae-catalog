<?php
include "connect_to_database.php";

// Prepare
$sql = "SELECT * FROM catalog WHERE full_catalog_number=". "\"". $catalog_number ."\"";

// Execute statement and print rows
include "build_cards_user_view.php";

// Close connection
$conn->close();
?>