<?php 
$currentFile = basename($_SERVER["SCRIPT_NAME"]);

function isFirstPageLoad() {
  if (
  	count($_GET) === 0 || 
    getQueryString() === ""
  ) {
  	return true;
  }
  return false;
}

function doesGEThaveCount() {
	return count($_GET);
}

function getQueryString() {
	$queryString = $_GET["page"] ?? "";

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
	if (
		checkPages( getQueryString() )
	) {
		$page = $_GET["page"] ?? "";

		return $page;
	}
	
	return "404";
}

function isPageQueryValid() {
	
	// return "false";

	// formatVar(array_key_exists("page", $_GET));

	// if (array_key_exists("page", $_GET)) {
	// 	return true;
	// }
	// return array_key_exists("page", $_GET);
	if (array_key_exists("page", $_GET)) {
		// echo "true";
		return "true";
	}
	if (!array_key_exists("page", $_GET)) {
		// echo "false";
		return "false";
	}
	
}

function checkPages(string $page):bool {
	// compare $pages against a list of known strings

	$pageList = [
		"home",
		"",
		"projects",
		"project",
		"project-detail",
		"about",
		"writing",
		"style-guide",
		"contact",
		"experiments",
		"experiment-detail",
		"blog-post-detail", 
		"case-study", 
		"resume", 
		"site-map",
		"now",
		"goals"
	];

	return in_array($page, $pageList);
}

function getClassByQuery() {

	if ( 
		getQueryString() === null || 
		isFirstPageLoad()
	 ) {
		return "home";
	}
	return getPage();
}

function getProjectSlug() {
	return $_GET["slug"] ?? null;
}

function sanitizeStr(string $str) {
	// removes anything that isnt a letter, dash, or number.
	// replace it with empty string ""
	return preg_replace("/[^a-zA_Z0-9]/", "", $str);
}

function generatePageTitle() {
	$articleH1 = ""; 

  if ( 
  	!isset($_GET["page"]) && 
  	getPage() !== "false" && 
  	isPageQueryValid() === "true"
   )  {
  	$articleH1 = "Hi!";
  	return $articleH1;
  }

  else if ( (getPage() == "false" || isPageQueryValid() === "false") && !isFirstPageLoad() )  {
  	$articleH1 = "404!";
  	return $articleH1;
  }

  else if( isset($_GET["page"]) ) {
  	switch ( getPage() ) {
  	
  		case "home":
  		case "":
	  		$articleH1 = "Hi!";
	  			return $articleH1;
	  			break;

  		case "projects":
  			$articleH1 = "My Projects";
  			return $articleH1;
  			break;

			case "project":
				if ( getProjectBySlug($_GET["slug"] ?? null) ) {
					$articleH1 = setProjectTitle($_GET["slug"] ?? null);
					return $articleH1;
				}
				
				else if ( getProjectBySlug($_GET["slug"] ?? null) ) {
					return $articleH1;
				}
				// return return $articleH1;
				// return $articleH1;
				 //if not a valid titxle, return ""
				break;			

			case "blog-post-detail":
				$articleH1 = "My blog post detail";
				return $articleH1;
				break;

			case "experiments":
				$articleH1 = "My experiments";
				return $articleH1;
				break;

			case "experiment-detail":
				$articleH1 = setExperimentDetailTitle( getExperimentName() );
				return $articleH1;
				break;

			case "case-study":
				$articleH1 = "case study";
				return $articleH1;
				break;		

			case "about":
				$articleH1 = "About me";
				return $articleH1;
				break;

			case "resume":
				$articleH1 = "My resume";
				return $articleH1;
				break;

			case "writing":
				$articleH1 = "My writing";
				return $articleH1;
				break;		
			
			case "goals":
				$articleH1 = "My goals";
				return $articleH1;
				break;

			case "contact":
				$articleH1 = "contact me?";
				return $articleH1;
				break;

			case "site-map":
				$articleH1 = "sitemap links";
				return $articleH1;
				break;

			case "style-guide":
				$articleH1 = "site style guide";
				return $articleH1;
				break;	

			case "now":
				$articleH1 = "now";
				return $articleH1;
				break;	

			default:
				$articleH1 = "404!";
				return $articleH1;
			}
		}
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

  		case "project":
				generateMeta("project detail ", "my project detail", "https://marcorizzuto.net/images/metadata/project-detail.jpg");
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

			case "blog-post-detail":
				generateMeta("blog post detail", "my blog post detail", "https://marcorizzuto.net/images/metadata/blog-post-detail.jpg");
				break;

			case "site-map":
				generateMeta("site-map", "all the site links!", "https://marcorizzuto.net/images/metadata/site-map.jpg");
				break;

			case "style-guide":
				generateMeta("style-guide", "site style guide", "https://marcorizzuto.net/images/metadata/style-guide.jpg");
				break;

			case "now":
				generateMeta("now", "now page", "https://marcorizzuto.net/images/metadata/style-guide.jpg");
				break;

			default:
  			generateMeta("404", "page not found", "https://marcorizzuto.net/images/metadata/404.jpg");
  	}
  }
?>

