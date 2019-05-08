<?php
if (($_FILES['audio_data']['name']!="")){
// Where the file is going to be stored
	$target_dir = "upload/";
	$file = $_FILES['audio_data']['name'];
	$path = pathinfo($file);
	$filename = uniqid();
	$ext = 'mp3';
	$temp_name = $_FILES['audio_data']['tmp_name'];
	$path_filename_ext = $target_dir.$filename.".".$ext;

// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo($filename);
 }
}
?>
