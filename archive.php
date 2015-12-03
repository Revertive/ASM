<?php
	try{
		require_once 'pdo_connect.php';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
	include 'templates/header.php'; 

	foreach ($db->query("SELECT * FROM sermonList ORDER BY Date DESC") as $row){
?>
		<div class="container_content">
			
		</div>
<?php 
	} 
	include 'templates/footer.php'; 
?>
