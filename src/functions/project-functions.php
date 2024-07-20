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

<?php

  //get all projects
  function getAllProjects() {
  	// why is the project detail page breaking??
		$json = file_get_contents("../src/database/projects.json");
		return json_decode($json, true);

		// return file_get_contents("../src/database/projects.json"); 
	}

  //get individual project that matches slug
	function getProjectBySlug($slug) {
		$projects = getAllProjects();
		foreach($projects as $project) {
			if ($project["slug"] === $slug) {
				return $project;
			}
		}
	}

	// get all the case studies
	// decode the JSON to PHP
	//return case study
	function getAllCaseStudies() {
		$json = file_get_contents("../src/database/case-studies.json");
		return json_decode($json, true);
	}

	//get the case study that matches a certain slug
	function getCaseStudyBySlug($slug) {
		//get case studies
		$caseStudies = getAllCaseStudies();
		// look at each case study
		foreach ($caseStudies as $caseStudy) {
			//if it matches slug parameter
			if ($caseStudy["slug"] === $slug) {
				//return case study data
				return $caseStudy;
			}
		}
	}

	function setProjectTitle(string $projectTitle):string {
		if ( getAllProjects() ) {
			return $projectTitle;
		}
	}
?>
