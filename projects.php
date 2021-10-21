<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta property="og:description" content="A Web Designer's project page. Welcome to my projects page!">
	 <link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>projects page</title>
</head>
<body>

	<?php 
	include "header.php";
	// include "project-info.php";
	include "functions.php";

	?>
	<?php
	projectBuilder("responsive layout challenge", "https://via.placeholder.com/150", "responsive layout patterns", "https://peprojects.dev");

	projectBuilder("layout challenge one", "https://via.placeholder.com/150", "a layout challenge by PE", "https://peprojects.dev");
	?>
</body>
</html>