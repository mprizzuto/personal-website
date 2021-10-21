<?php function cardBuilder($name, $description, $url) {?>
<card class="project-card">
	<details>
		<summary><?=$name?></summary>
		<p><?= $description?></p>
    <a class="project-link" href="<?=$url?>" target="_blank"><?=$name?></a>
	</details> 
</card>
<?php } ?>


