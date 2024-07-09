<?php 
require "../src/database/resume-data.php";
?>

<section class="resume-data">
	<inner-column>
		<?php generateResume($resumeData) ?>
	</inner-column>
</section>

<?php aboutPageNav();?>