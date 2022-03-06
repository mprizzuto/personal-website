<?php 
//get the current file .. i.e index.php
$currentFile = basename($_SERVER["SCRIPT_NAME"]);
$queryString = $_GET["page"] ?? null;
// a better var_dump
function formatVar(mixed $input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

//get any page with ?page query string
function getPage() {
	$page = $_GET["page"] ?? null;
	return $page;
}

//get any page with ?writing query string
function getWritingPage() {
	$page = $_GET["writing"] ?? null;
	return $page;
}

// a function that is used in the control flow for the 404 page
function checkPages($page) {
	// compare $pages against a list of known strings

	$pageList = ["home", "projects" , "about", "writing", "style-guide", "contact", "experiments", "project-detail", "experiment-detail", "blog-post-detail", "", $_SERVER['SCRIPT_FILENAME'] === "index.php", "case-study"];

	// return "true" if page exists, otherwise return "false"
	return in_array($page, $pageList) ? "true" : "false";
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

<?php 
function generateMeta($title, $description, $image) {?>
<title><?=$title?></title>
    <meta name="description" content="<?=$description?>">

    <meta property="og:image" content="<?=$image?>">
<?php }?>

<?php 
	//generate the meta for the pages based on the query string returned by the getHead() function
	//TODO. update paths to meta images
  function getHead() {
  	switch (getPage()) {
  		case "home":
  			generateMeta("home", "I am a Web Designer who creates websites that help Health Professionals build and promote their personal brand. Unlike my competitors, I have experience with product beta-testing, and a passion for creating positive change in America's healthcare system.", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
  			break;

  		case null:
  			generateMeta("home", "I am a Web Designer who creates websites that help Health Professionals build and promote their personal brand. Unlike my competitors, I have experience with product beta-testing, and a passion for creating positive change in America's healthcare system.", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
  			break;

  		case "projects":
  			generateMeta("projects", "come see my projects", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
  			break;

  			case "about":
	  			generateMeta("about", "come read about the man behind the code", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  			break;

  			case "writing":
	  			generateMeta("writing", "like reading? you'll love my blog posts", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  			break;

	  		case "portfolio":
	  			generateMeta("portfolio", "check out my portfolio", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  			break;

	  			case "resume":
	  			generateMeta("resume", "check out my resume", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  			break;

	  			// case checkPages(getPage()) === false:
	  			// 	generateMeta("404", "looks like you took a wrong turn", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");

		
	  		// default:
					// generateMeta("home", "the homepage meta", "https://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  		// echo "this is the defualt";
  	}
  }
?>

<?php 
// generates skill list for homepage
function generateSkills(array $skills) {
	foreach ($skills as $key => $value) 
		echo "<li>" . "<span class='language'>$key</span> " . $value . "</li>";
	}
?>


<?php 
//code for portfolio section of site
?>

<?php function generateResume(iterable $resumeData) { ?>

	<?php foreach ($resumeData as $resume): ?>
		<?php foreach ($resume as $key => $value): ?>
			<h2><?=$key?></h2>

			<p><?=$value?></p>
		<?php endforeach ?>
	<?php endforeach ?>
<?php } ?>

<?php function generateGoals(iterable $goalData) {?>
	<ul class="goal-list">
  <?php foreach($goalData as $goals) {?>
    <?php foreach($goals as $key => $value){ ?>
    	<li><strong><?=$key?></strong></li>

    	<li>
    	<ul class="goal-expanded">
    	<?php foreach($value as $subvalue){?>
    		<li><?=$subvalue?></li>
    	<?php }?>
    	</ul>
    	</li>
    <?php } ?>
  <?php }?>
  </ul>
<?php }?>



<?php function generatePortfolio(iterable $portfolioData) {?>
	<ul>
	<?php foreach ($portfolioData as $portfolio): ?>
		<li><?=$portfolio["name"]?>
			
			<ul>
				<li><?=$portfolio["description"]?></li>
				<li><a href="<?=$portfolio["link"]?>"><?=$portfolio["name"]?></a></li>
			</ul>
		</li>
	<?php endforeach; ?>
	</ul>
<?php }?>

<?php function generateCaseStudy(string $html,  iterable $array, int $index, string $key){?>
	<<?=$html?>><?=$array[$index][$key]?><<?=$html?>>
<?php }?>

<?php 
  //get all projects
  function getAllProjects() {
		//get the project data
		$json = file_get_contents("database/projects.json");
		//decode data to PHP
		return json_decode($json, true);
		//return data
	}

  //get individual project that matches slug
	function getProjectBySlug($slug) {
		//get projects
		$projects = getAllProjects();
		//look at each project
		foreach($projects as $project) {
			//if it matches the given slug
			if ($project["slug"] === $slug) {
	  		//return data for that project
				return $project;
			}
		}
	}


	// get all the case studies
	// decode the JSON to PHP
	//return case study
	function getAllCaseStudies() {
		$json = file_get_contents("database/case-studies.json");
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

?>













