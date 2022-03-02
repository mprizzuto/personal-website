<?php 
require "./database/resume-data.php";
// require_once "./functions.php";
?>

<section class="resume-data">
	<inner-column>
		<?php generateResume($resumeData) ?>
	</inner-column>
</section>
