<?php function cardBuilder($name, $goal, $link) {?>
<card class="project-card">
	<details>
		<summary><?=$name?></summary>
		<p><?=$goal?></p>
    <a class="project-link" href="<?=$link?>"><?=$name?></a>
	</details> 
</card>
<?php } ?>

<?php function projectDetailBuilder(string $name, string $skills, string $image, string $alt, string $description, string $url ):void { ?>
	<section class="project-detail">
		<inner-column>
			<detail-card>
				<h2><?=$name?></h2>

				<p><?=$skills?></p>

				<picture>
					<img src="<?=$image?>" alt="<?=$alt?>">
				</picture>

				<p><?=$description?></p>

				<a href="<?=$url?>">see the project</a>
			</detail-card>
		</inner-column>
	</section>
<?php } ?>