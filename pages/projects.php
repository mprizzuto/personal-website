<?php 
	include "project-info.php";
?>

<section class="projects">
	<inner-column>
		<h2>Projects</h2>

		<p>The projects on this page cover topics I learned as a student at <a href="https://perpetual.education" target="_external">Perpetual Education</a> and through self-study. They are carefully picked to show my interests and capabilities in the areas of <strong>responsive design</strong>, <strong>programming</strong>, and <strong>User Experience</strong></p>

		<ul class="project-list">
			<?php foreach($projectList as $project): ?>
				<li>
					<project-card>
						<h2><?=$project["name"]?></h2>
						<picture>
							<img src="<?=$project["image"]?>" alt="<?=$project["alt"]?>">
						</picture>
						<p><?=$project["description"]?></p>
						<a href="<?=$project["url"]?>" target="_blank"><?=$project["name"]?></a>
					</project-card>
				</li>
			<?php endforeach; ?>
		</ul>
	</inner-column>
</section>

<?php 
include "experimental.php";
?>