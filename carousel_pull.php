<?php
$dir = "../media/carousel/";
$files = array_slice(scandir($dir), 2);

echo "<div class='carousel-inner'>";
for($i = 0; $i <= count($files); $i++){
  $src = $dir . $files[i];
  if($i == 0) {
    echo "<div class='carousel-item active'>";
      echo "<img src=" .$src. ">";
    echo "</div>";
  } else {
    echo "<div class='carousel-item'>";
      echo "<img src=" .$src. ">";
    echo "</div>";
  }

}
echo "</div>";
 ?>
