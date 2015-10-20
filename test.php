<?php
	try{
		require_once 'pdo_connect.php';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
?>
<?php include 'templates/header.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../lib/jquery.min.js"></script>
<script type="text/javascript" src="../../dist/jplayer/jquery.jplayer.min.js"></script>
<?php
	foreach ($db->query("SELECT * FROM sermonList ORDER BY Date DESC") as $row){
?>
		<div class="container_content">
			<div class="slide_image">
				<img src="images/title_slides/<?php echo $row['Image']; ?>" alt="<?php echo $row['Speaker']; ?>">
			</div>
			<h2><?php echo $row['Title']; ?></h2>
			<p>
				<?php echo $row['content']; ?>
			</p><!--
			<audio controls class="audio_player">
				<source src="./Messages/<?php echo $row['audio']; ?>" type="audio/mpeg">
			</audio> -->
				<script type="text/javascript">
					//<![CDATA[
					$(document).ready(function(){
					
						$("#jquery_jplayer_1").jPlayer({
							ready: function (event) {
								$(this).jPlayer("setMedia", {
									title: "Bubble",
									m4a: "http://jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
									oga: "http://jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
								});
							},
							swfPath: "../../dist/jplayer",
							supplied: "m4a, oga",
							wmode: "window",
							useStateClassSkin: true,
							autoBlur: false,
							smoothPlayBar: true,
							keyEnabled: true,
							remainingDuration: true,
							toggleDuration: true
						});
					});
					//]]>
				</script>
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
					<div class="jp-type-single">
						<div class="jp-gui jp-interface">
							<div class="jp-controls">
								<button class="jp-play" role="button" tabindex="0">play</button>
								<button class="jp-stop" role="button" tabindex="0">stop</button>
							</div>
							<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>
								</div>
							</div>
							<div class="jp-volume-controls">
								<button class="jp-mute" role="button" tabindex="0">mute</button>
								<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value"></div>
								</div>
							</div>
							<div class="jp-time-holder">
								<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
								<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
								<div class="jp-toggles">
									<button class="jp-repeat" role="button" tabindex="0">repeat</button>
								</div>
							</div>
						</div>
						<div class="jp-details">
							<div class="jp-title" aria-label="title">&nbsp;</div>
						</div>
					</div>
				</div>
		</div>
	<?php } ?>
<?php include 'templates/footer.php'; ?>
