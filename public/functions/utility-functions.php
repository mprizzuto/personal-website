<?php 
function checkPages(mixed $page) {
	// compare $pages against a list of known strings

	$pageList = ["home","projects","project-detail","about","writing","style-guide","contact","experiments","experiment-detail","blog-post-detail", "", "case-study", "resume", "site-map"];

	// return "true" if page exists, otherwise return "false"
	return in_array($page, $pageList) ? "true" : "false";
}
?>
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
  		case null:
  			generateMeta("home", "My name is Marco Rizzuto. I bring a neurodiverse approach to Web Development and User Experience. I am excited to take part in the current web revolution to build highly performant and accessible websites.", "https://marcorizzuto.net/images/metadata/home.jpg");
  			break;	

  	 	case "projects":
  			generateMeta("projects", "come see my projects", "https://marcorizzuto.net/images/metadata/projects.jpg");
  			break;

			case "about":
  			generateMeta("about", "come read about the man behind the code", "https://marcorizzuto.net/images/metadata/about.jpg");
  			break;

  		case "sitemap":
  			generateMeta("sitemap", "the sitemap", "https://marcorizzuto.net/images/metadata/sitemap.jpg");
  			break;	

			case "writing":
  			generateMeta("writing", "like reading? you'll love my blog posts", "https://marcorizzuto.net/images/metadata/writing.jpg");
  			break;

  		case "blog-post-detail":
  			generateMeta("blog post detail", "get the detail!", "https://marcorizzuto.net/images/metadata/writing-page-detail.jpg");
  			break;	

  		case "case-study":
  			generateMeta("project case study", "read the case study!", "https://marcorizzuto.net/images/metadata/writing-page-detail.jpg");
  			break;

			case "resume":
  			generateMeta("resume", "check out my resume", "https://marcorizzuto.net/images/metadata/resume.jpg");
  			break;

  		case "goals":
  				generateMeta("goals", "check out my goals", "https://marcorizzuto.net/images/metadata/goals.jpg");
  				break;

			case "contact":
				generateMeta("contact", "contact me", "https://marcorizzuto.net/images/metadata/contact.jpg");
				break;

			case "experiments":
				generateMeta("experiments", "my experiments", "https://marcorizzuto.net/images/metadata/experiments.jpg");
				break;

			case "experiment-detail":
  				generateMeta("experiment detail", "my experiment detail", "https://marcorizzuto.net/images/metadata/experiment-detail.jpg");
  				break;

			case "project":
				generateMeta("project detail ", "my project detail", "https://marcorizzuto.net/images/metadata/project-detail.jpg");
				break;

			case "blog-post-detail":
				generateMeta("blog post detail", "my blog post detail", "https://marcorizzuto.net/images/metadata/blog-post-detail.jpg");
				break;

			case "site-map":
				generateMeta("site-map", "all the site links!", "https://marcorizzuto.net/images/metadata/site-map.jpg");
				break;

			case "style-guide":
				generateMeta("style-guide", "site style guide", "https://marcorizzuto.net/images/metadata/style-guide.jpg");
				break;

			default:
  			generateMeta("404", "page not found", "https://marcorizzuto.net/images/metadata/404.jpg");
  	}
  }
?>

<?php
//get the current file .. i.e index.php
$currentFile = basename($_SERVER["SCRIPT_NAME"]);
// $queryString = $_GET["page"] ?? null;

function getQueryString() {
	$queryString = $_GET["page"] ?? null;
	return $queryString;
}

// a better var_dump
function formatVar(mixed $input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

function sanitizeString(string $str) {
	$result = htmlspecialchars($str);
	$result = strip_tags($str);

	return $result;
}

//get any page with ?page query string
function getPage() {
	$page = $_GET["page"] ?? null;
	return $page;
}
?>

