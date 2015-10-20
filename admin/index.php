<?php
	try{
		require_once '../pdo_connect.php';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
	include 'templates/header.php'; 
?>

<form id="login" method="post" action="login.php">
	<div>
		<label for="form_username"> Username </label>
		<input id="form_username" name="form_username">
	</div>
	<div>
		<label for="form_password"> Password </label>
		<input id="form_password" name="form_password">
	</div>
	<div id="submit_button">
		<input type="submit" value="SEND" name="submit">
	</div>
</form>

<?php include 'templates/footer.php'; ?>
