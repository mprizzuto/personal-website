<?php 
require "./database/goal-data.php";
// require_once "./functions.php";
?>
<section class="goal-data">
	<inner-column>
	  <?php generateGoals($goalData)?>
	</inner-column>
</section>