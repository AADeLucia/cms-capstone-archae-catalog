<?php
include "head.php";
echo "<head><title>Add to Reference Table</title><style>body{background-color: white;};</style></head>";
$file = $_GET['file'];
$old = getcwd(); // Save the current directory
chdir("../media/carousel");
if(unlink(realpath($file))){
  chdir($old);
  echo "File was deleted. " . $file;
  echo "<br />";
  echo "<a class='btn btn-primary' href='front_page_maintenance.php' role='button'>Return to Front Page Maintenance</a>";
} else {
  echo "Failed to remove file.";
  print_r(error_get_last());
}
?>
