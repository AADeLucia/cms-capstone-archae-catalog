<?php
function upload_artifact_photo($FILE, $target_dir = "/var/www/html/media/artifacts/"){
  output = "Image upload error: ";

  // Check for errors
  if($FILES['photograph_file']['error'] > 0){
      return output .= 'An error ocurred when uploading your image.<br>';
  }

  if(!getimagesize($FILES['photograph_file']['tmp_name'])){
      return output .= 'Please ensure you are uploading an image file.<br>';
  }

  // Check filetype
  $ext = $FILES['photograph_file']['type'];
  if($ext != 'image/png' && $ext != 'image/jpeg' && $ext != 'image/gif'){
      return output .= 'Unsupported filetype uploaded. Only allow png, jpg, and gif.<br>';
  }

  // Check filesize
  if($FILES['photograph_file']['size'] > 80000000){
      return output .= 'File uploaded exceeds maximum upload size.';
  }

  // Check if the file exists
  if(file_exists($target_dir . $FILES['photograph_file']['name'])){
      return output .= 'File with that name already exists.<br>';
  }

  // Upload file
  if(!move_uploaded_file($FILES['photograph_file']['tmp_name'], $target_dir . $FILES['photograph_file']['name'])){
      return output .= 'Error uploading file - check destination is writeable.<br>';
  }

  // Uploaded successfully
  return "The file " . basename($FILES["fileToUpload"]["name"]) . " has been uploaded.<br>";
}
?>
