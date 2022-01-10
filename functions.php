<?php 
//funcsutins.hpp
// a better var_dump
function formatVar(mixed $input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

?>
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

<?php function experimentDetailBuilder(string $name, string $hypothesis, string $materials, string $image, string $alt, string $result):void { ?>
	<detail-card>

		<h2><?=$name?></h2>

		<p><?=$hypothesis?></p>

		<p><?=$materials?></p>

		<picture>
			<img src="<?=$image?>" alt="<?=$alt?>">
		</picture>

		<p><?=$result?></p>
	</detail-card>
<?php } ?>







