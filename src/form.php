<?php




//$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/public/images/";
//// Check for errors
//if($_FILES['file_upload']['error'] > 0){
//    die('An error ocurred when uploading.');
//}
//if(!getimagesize($_FILES['file_upload']['tmp_name'])){
//    die('Please ensure you are uploading an image.');
//}
//// Check filetype
//if($_FILES['file_upload']['type'] != 'image/jpeg'){
//    die('Unsupported filetype uploaded.');
//}
//// Check filesize
//if($_FILES['file_upload']['size'] > 500000){
//    die('File uploaded exceeds maximum upload size.');
//}
//// Check if the file exists
//if(file_exists('public/image' . $_FILES['file_upload']['name'])){
//    die('File with that name already exists.');
//}
//echo ($_FILES['file_upload']['tmp_name'].'  ' );
//echo 'public/images' . $_FILES['file_upload']['name'];
//// Upload file
//if(!move_uploaded_file($_FILES['file_upload']['tmp_name'],  'public/images/' . $_FILES['file_upload']['name'])){
//    die('Error uploading file - check destination is writeable.');
//}
//die('File uploaded successfully.');