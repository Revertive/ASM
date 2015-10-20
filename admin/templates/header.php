<?php 
	
	include '../templates/variables.php'; 
	
	try{
		require_once '../pdo_connect.php';
		$sql = 'SELECT * 
		FROM page_list';
	}catch (Exception $e){
		$error = $e->getMessage();
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset = "UTF-8"/>
		<title>Align Student Ministries</title>
		<meta name="description" content="Align Student Ministries"/>
		<meta name="keywords" content="ASM, Appostalic, Church, Align, Student, Ministries"/>
		<meta name="author" content="<?php echo $creator ?>"/>
		<link rel="stylesheet" href="../css/ASM.css"/>
		<link rel="shortcut icon" href=""/>
	</head>
	<body>
		<header>
			<h1>
				<a href="/" title="Home">Align Student Ministries</a>
			</h1>
			<a href="/" title="Home">
				<img src="../images/template/asmlogo.jpg" alt="Align Student Ministries">
			</a>
			<nav>
				<a href="/edit_message.php" title="Edit Message"> 
					Edit Message
				</a>
				<a href="/addmessage.php" title="Add Message">
					Add Message
				</a>
			</nav>
		</header>