<?php 
	$experimentsJSON = file_get_contents("./database/experiments.json");
	$experimentsList = json_decode($experimentsJSON, true);
?>
