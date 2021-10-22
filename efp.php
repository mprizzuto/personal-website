<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
		<?php 
		include "header.php";
		include "efp-data.php";
		?>
		<main class="efp-main">
			<section class="exercises">
				<inner-column>
					<h1 class="heading-one">Programming and templating using PHP</h1>
					<ul class="exercise-list">
						<?php foreach($exerciseList as $exercise): ?>
							<li><?=$exercise["name"]?></li>
							<li><?=$exercise["description"]?></li>
							<li><a href="<?=$exercise["link"]?>" target="_external">read more</a></li>
						<?php endforeach; ?>
					</ul>
					
				</inner-column>
			</section>
		</main>
	</body>
</html>