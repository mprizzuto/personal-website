<?php 
	$experimentsJSON = file_get_contents("../src/database/experiments.json");
	$experimentsList = json_decode($experimentsJSON, true);
?>
