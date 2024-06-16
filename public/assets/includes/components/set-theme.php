<?php
// Set the content type to plain text
// header('Content-Type: text/plain');
header('Content-Type:text/html; charset=UTF-8');

// Get the raw POST data
$themeChoice = file_get_contents('php://input');

// Echo the received theme choice back as the response

?>
