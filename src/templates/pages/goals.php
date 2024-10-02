<?php 
$jsonGoals = file_get_contents("../src/database/goals.json");
$goalData = json_decode($jsonGoals, true);
?>
<section class="goal-data">
	<inner-column>
	   <?php generateGoals($goalData)?>
	</inner-column>
</section>
