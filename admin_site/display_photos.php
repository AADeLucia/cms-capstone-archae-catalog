<?php
$dir = "../media/carousel/";
$files = array_slice(scandir($dir), 2);

foreach($files as $f){
  $src = $dir . $f;
  echo "<div class='row'>";
  //Photo column display
  echo "<div class='col'>";
    echo "<img src=" .$src. " class='img-thumbnail' width='100'>";
  echo "</div>";
  //Delete button
  echo "<div class='col'>";
  echo "<a href='delete_file.php?file=" .$f. "'class='btn btn-primary'>Delete</a>";
  echo "</div>";
  echo "</div>";
}

?>
