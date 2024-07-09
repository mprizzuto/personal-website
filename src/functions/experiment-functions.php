<?php
function getAllExperiments() {
	//get the project data
	$json = file_get_contents("database/experiments.json");
	//decode data to PHP
	return json_decode($json, true);
	//return data
}


function getExperimentBySlug($slug) {
	$experiment = getAllProjects();

	foreach($experiment as $experiment) {
    
		if ($experiment["slug"] === $slug) {
			return $experiment;
		}
    
	}
}
?>

<?php function experimentDetailBuilder(string $name, string $hypothesis, string $materials, string $image, string $alt, string $result):void { ?>
	<section class="experiment-detail">
		<inner-column>
			<detail-card>

				<h2><?=$name?></h2>

				<p><?=$hypothesis?></p>

				<p><?=$materials?></p>

				<picture>
					<img src="<?=$image?>" alt="<?=$alt?>">
				</picture>

				<p><?=$result?></p>
			</detail-card>
		</inner-column>
	</section>
	
<?php } ?>