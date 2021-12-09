<?php
$timezone = date_default_timezone_set("America/New_York");

$time = date("H");

	switch ($time) {
		case $time > 18:
			include "svgs/moon.svg";
			break;

		
		default:
			include "svgs/sun.svg";
			break;
	}

?>