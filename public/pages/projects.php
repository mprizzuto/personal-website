<?php 
	include "../src/database/project-database.php";

?>
<section class="projects">
	<inner-column>
		<h2>Projects</h2>

		<p>The projects on this page cover topics I learned as a student at <a href="https://perpetual.education" target="_blank">Perpetual Education</a> and through self-study. They are carefully picked to show my interests and capabilities in the areas of <strong>responsive design</strong>, <strong>programming</strong>, and <strong>User Experience</strong></p>


		<ul class="project-list">
			<?php foreach($projectList as $project): ?>

				<li>
					<project-card>
						<h2><?=$project["title"]?></h2>
						<a href="?page=project&slug=<?=$project["slug"]?>">see the project</a>
						<a href="?page=case-study&slug=<?=$project["case-study-slug"]?>">read the case study</a>
						<p><?=$project["description"]?></p>
					</project-card>
				</li>

			<?php endforeach; ?>
		</ul>
	</inner-column>
</section>

<?php 
// include "experiments.php";
include "./routers/detail-router.php";

?>