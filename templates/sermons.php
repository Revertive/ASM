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
			<div class="slide_image">
				<img src="images/title_slides/<?php echo $row['Image']; ?>" alt="<?php echo $row['Speaker']; ?>">
			</div>
			<div class="text_containter">
				<h2><?php echo $row['Title']; ?></h2>
				<p>
					<?php echo $row['content']; ?>
				</p>
			</div>
			<div class="audio_section">
				<div class="audio_player">
					<audio controls>
						<source src="./Messages/<?php echo $row['audio']; ?>" type="audio/mpeg">
					</audio> 
				</div>
				<div class="download_button">
					<a href="./Messages/<?php echo $row['audio']; ?>" download="<?php echo $row['Title']; ?>" Title="Does not work in IE or Safari">Download</a>
				</div>
			</div>
		</div>
<?php 
	} 
	include 'templates/footer.php'; 
?>
