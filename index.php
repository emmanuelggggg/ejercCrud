<!DOCTYPE html>
<html>
	<head>
	 <?php include_once "src/templates/head.template.php";?>
	</head>
		<style type="text/css">
			.sidebar{
				height: 90vh;
			}
		</style>
	<body>
		<header>
			<?php include_once "src/templates/navbar.template.php";?>
		</header>
	
		<main>
			<?php include_once "src/views/main.views.php"?>
		</main>

	</body>
</html>