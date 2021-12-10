<?php 
	include "project-info.php";

	?>
		<section>
			<inner-column>
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