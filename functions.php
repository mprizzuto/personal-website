<?php 
//get the current file .. i.e index.php
$currentFile = basename($_SERVER["SCRIPT_NAME"]);

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
	$pageList = ["home", "projects" , "about", "writing", "style-guide", "contact", "experiments", "project-detail", "experiment-detail", "blog-post-detail", "portfolio"];

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
  function getHead() {
  	switch (getPage()) {
  		case "home":
  			generateMeta("projects", "I am a Web Designer who creates websites that help Health Professionals build and promote their personal brand. Unlike my competitors, I have experience with product beta-testing, and a passion for creating positive change in America's healthcare system.", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
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
		
	  		default:
					generateMeta("404", "looks like you took a wrong turn", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
  	}
  }

	//OR
  // function getHead() {
  // 	switch ($_SERVER["SCRIPT_NAME"]) {
  // 		case 'value':
  // 			// code...
  // 			break;
  		
  // 		default:
  // 			// code...
  // 			break;
  // 	}
  // }
?>







