<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta property="og:description" content="A Web Designer's project page. Welcome to my projects page!">
	 <link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>projects page</title>
</head>
<body>

	<?php 
	include "header.php";
	include "project-info.php";

	?>

	<main class="my-projects">
		<section class="project-gallery">
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
	</main>
</body>
</html>