<?php
// $timezone = date_default_timezone_set("America/New_York");

$time = date("H");
$timeChange = 13;
$planetaryBody = "sun";

var_dump($time);

if ($time !== "08") {
	$planetaryBody = "moon";
}

	switch ($time) {
		case $time !== "08":
			include "images/svgs/moon.php";
			break;

		default:
			include "images/svgs/sun.php";
			break;
	}

	//TO DO. conditionall say "sun" or "moon"  based on time of day

?>