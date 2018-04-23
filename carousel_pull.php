<?php
$dir = "media/carousel/";
$files = array_slice(scandir($dir), 2);

//Indicators for carousel
$indicator_count=0;
echo "<ul class='carousel-indicators'>";
foreach($files as $f){
  if($indicator_count=0){
    echo "<li data-target='#myCarousel' data-slide-to=". $indicator_count ." class='active'></li>";
  } else {
    echo "<li data-target='#myCarousel' data-slide-to=". $indicator_count ."></li>";
  }
}
echo "</ul>";

//Items for carousel
$count=0;
echo "<div class='carousel-inner'>";
foreach($files as $f){
  $src = $dir . $f;
  if($count == 0) {
    echo "<div class='carousel-item active'>";
      echo "<img src=" .$src. ">";
    echo "</div>";
  } else {
    echo "<div class='carousel-item'>";
      echo "<img src=" .$src. ">";
    echo "</div>";
  }
  ++$count;
}
echo "</div>";
?>
