<?php
	try{
		require_once '../pdo_connect.php';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
	include 'templates/header.php'; 
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="../jQuery/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#form_date" ).datepicker();
  });
  </script>
<div class="container">
	<form id="add_message" method="post" action="message_upload.php" enctype="multipart/form-data">
		<div>
			<label for="form_date"> Date </label>
			<input id="form_date" name="form_date">
		</div>
		<div>
			<label for="form_title"> Title </label>
			<input id="form_title" name="form_title">
		</div>
		<div>
			<label for="form_speaker"> Speaker </label>
			<input id="form_speaker" name="form_speaker">
		</div>
		<div>
			<label for="form_image"> Image </label>
			<input id="form_image" type="file" name="form_image">
		</div>
		<div>
			<label for="form_audio"> Audio </label>
			<input id="form_audio" type="file" accept=".mp3" name="form_audio">
		</div>
		<div>
			<label for="form_content"> Content </label>
			<textarea id="form_content" name="form_content"></textarea>
		</div>
		<div id="submit_button">
			<input type="submit" value="SEND" name="submit">
		</div>
	</form>
</div>
<?php include 'templates/footer.php'; ?>