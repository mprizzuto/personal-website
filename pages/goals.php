<?php 
// require "./database/goal-data.json";
$jsonGoals = file_get_contents("./database/goal-data.json");
$goalData = json_decode($jsonGoals, true);
// formatVar($goalData);
?>
<section class="goal-data">
	<inner-column>
	   <?php generateGoals($goalData)?>
	</inner-column>
</section>

<?php aboutPageNav();?>