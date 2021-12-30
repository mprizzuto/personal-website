<?php
$timezone = date_default_timezone_set("America/New_York");

$time = date("H");
$timeChange = 13;
$planetaryBody = "sun";

if ($time > $timeChange) {
	$planetaryBody = "moon";
}

	switch ($time) {
		case $time > $timeChange:
			include "images/svgs/moon.php";
			break;

		default:
			include "images/svgs/sun.php";
			break;
	}

	//TO DO. conditionall say "sun" or "moon"  based on time of day

?>