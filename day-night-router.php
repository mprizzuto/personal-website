<?php
$timezone = date_default_timezone_set("America/New_York");

$time = date("H");

	switch ($time) {
		case $time > 16:
			include "svgs/moon.php";
			break;

		default:
			include "svgs/sun.php";
			break;
	}

	//TO DO. conditionall say "sun" or "moon"  based on time of day

?>