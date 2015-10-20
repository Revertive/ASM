<?php
	try{
		require_once '../pdo_connect.php';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
	
include './templates/header.php'; 	
	
$date = $db->quote($_POST[form_date]);
$title = $db->quote($_POST[form_title]);
$content = $db->quote($_POST[form_content]);
$speaker = $db->quote($_POST[form_speaker]);
$audio_error = "for some unknown reason.";
$image_error = "for some unknown reason.";
$uploaded_image = 0;
$uploaded_image = 0;
$sql = "INSERT INTO sermonList(Date, Title, Speaker, Image, content, audio)
	VALUES (" . $date . "," . $title . "," . $speaker . ", '" . basename($_FILES["form_image"]["name"]) . "' ," . $content . ", '" . basename( $_FILES["form_audio"]["name"]) . "' )";
	
//upload audio
$target_dir = "../Messages/";
$target_file = $target_dir . basename($_FILES["form_audio"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (file_exists($target_file)) {
    $audio_error = " because it already exists.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your audio file was not uploaded" . $audio_error . "<br>";
} else {
    if (move_uploaded_file($_FILES["form_audio"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["form_audio"]["name"]). " has been uploaded.<br>";
        $uploaded_audio = 1;
    } else {
        echo "Sorry, there was an error uploading your audio file.<br>";
    }
}

//upload Image
$target_dir = "../images/title_slides/";
$target_file = $target_dir . basename($_FILES["form_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (file_exists($target_file)) {
    $image_error = " because it already exists.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your image file was not uploaded" . $image_error . "<br>";
} else if($uploaded_audio == 1) {
    if (move_uploaded_file($_FILES["form_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["form_image"]["name"]). " has been uploaded.<br>";
        $uploaded_image = 1;
    } else {
        echo "Sorry, there was an error uploading your image file.<br>";
    }
}

if($uploaded_image == 1){
	$db->exec($sql);
	echo "All files have been sucessfully uploaded.";
}else{
	echo "Try re-uploading the files.";
}


include './templates/footer.php'; 
?> 