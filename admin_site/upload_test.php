<?php
$target_dir = "/var/www/html/media/carousel/";

// Check for errors
if($_FILES['file_upload']['error'] > 0){
    die('An error ocurred when uploading.');
}

if(!getimagesize($_FILES['file_upload']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}

// Check filetype
$ext = $_FILES['file_upload']['type'];
if($ext != 'image/png' && $ext != 'image/jpeg' && $ext != 'image/gif'){
    die('Unsupported filetype uploaded. Only allow png, jpg, and gif.');
}

// Check filesize
if($_FILES['file_upload']['size'] > 80000000){
    die('File uploaded exceeds maximum upload size.');
}

// Check if the file exists
if(file_exists($target_dir . $_FILES['file_upload']['name'])){
    die('File with that name already exists.');
}

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], $target_dir . $_FILES['file_upload']['name'])){
    die('Error uploading file - check destination is writeable.');
}

// Uploaded successfully
echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
echo "<br />";
echo "<a class='btn btn-primary' href='front_page_maintenance.php' role='button'>Return to Front Page Maintenance</a>";

//die('File uploaded successfully.');
?>
