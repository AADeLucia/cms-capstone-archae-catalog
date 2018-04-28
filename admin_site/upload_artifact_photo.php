<?php
function upload_artifact_photo($FILES, $target_name, $target_dir = "/var/www/html/media/artifacts/"){
  echo "in function<br>";
  print_r($FILES);
  $output = "Image upload error: ";

  // Check for errors
  if($FILES['photograph_file']['error'] > 0){
      $output .= 'An error ocurred when uploading your image.<br>';
      return $output;
  }

  if(!getimagesize($FILES['photograph_file']['tmp_name'])){
      $output .= 'Please ensure you are uploading an image file.<br>';
      return $output;
  }

  // Check filetype
  $ext = $FILES['photograph_file']['type'];
  if($ext != 'image/png' && $ext != 'image/jpeg' && $ext != 'image/gif'){
      $output .= 'Unsupported filetype uploaded. Only allow png, jpg, and gif.<br>';
      return $output;
  }

  // Check filesize
  if($FILES['photograph_file']['size'] > 80000000){
      $output .= 'File uploaded exceeds maximum upload size.<br>';
      return $output;
  }

  // Check if the file exists
  if(file_exists($target_dir . $FILES['photograph_file']['name'])){
    $output .= 'File with that name already exists.<br>';
    return $output;
  }

  // Upload file
  if(!move_uploaded_file($FILES['photograph_file']['tmp_name'], $target_dir . $FILES['photograph_file']['name'])){
    $output .= 'Error uploading file - check destination is writeable.<br>';
    return $output;
  }

  // Uploaded successfully
  return "The file " . basename($FILES['photograph_file']["name"]) . " has been uploaded.<br>";
}
?>
