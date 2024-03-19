<?php
// $timezone = date_default_timezone_set("America/New_York");

$time = date("H");

switch ($time) {
	case $time >= 16 || $time <= 07:
		include "images/svgs/moon.php";
		break;

	default:
		include "images/svgs/sun.php";
}

?>