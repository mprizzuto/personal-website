EXPERIMENT-DATABASE.PHP

<?php 
	$experimentsJSON = file_get_contents("experiments.json");
	$experimentsList = json_decode($experimentsJSON, true);
?>

