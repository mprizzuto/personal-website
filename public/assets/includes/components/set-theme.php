<?php
// Get the raw POST data
$themeChoice = file_get_contents('php://input');
// header('Content-Type: text/html');

// Echo the received theme choice back as the response
// var_dump($themeParsed);
// echo "THEME:" . $themeChoice;

if ($themeChoice) {
	// $_COOKIE['mr-theme'] = $themeChoice;
	setcookie("mr-theme", $themeChoice);
}
?>
