
<?php 
// a better var_dump
function formatVar(mixed $input):array {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

// project detail generator


?>
<?php function cardBuilder($name, $goal, $link) {?>
<card class="project-card">
	<details>
		<summary><?=$name?></summary>
		<p><?=$goal?></p>
    <a class="project-link" href="<?=$link?>" target="_blank"><?=$name?></a>
	</details> 
</card>
<?php } ?>

<?php function projectBuilder($name, $image, $description, $url) { ?>
<project-card class="project">
	<h2 class="project-title"><?=$name?></h2>
	<picture class="project-pic">
		<img src="<?=$image?>" alt="<?=$name?>">
	</picture>

	<p><?=$description?></p>
	<a href="<?=$url?>">read more</a>
</project-card>
<?php } ?>

<?php function projectDetailBuilder(string $name, string $skills, string $image, string $alt, string $description, string $url ) { ?>
	<detail-card>

		<h2><?=$name?></h2>

		<p><?=$skills?></p>

		<picture>
			<img src="<?=$image?>" alt="<?=$alt?>">
		</picture>

		<p><?=$description?></p>

		<a href="<?=$url?>">see the project</a>
	</detail-card>
<?php } ?>




