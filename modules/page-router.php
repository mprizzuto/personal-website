<?php 
$page = $_GET["page"] ?? null;
// echo "the page is " . var_dump($page);
// echo "the GET is " . var_dump($_GET);

// var_dump($_GET);
// echo ("the page is ") .  var_dump($page);
// var_dump($page);



function checkPages($page) {
	// compare $pages against a list of known strings
	$pageList = ["home", "projects" , "about", "writing", "style-guide", "contact", "experiments"];

	// return "true" if page exists, otherwise return "false"
	return in_array($page, $pageList) ? "true" : "false";
}

switch ($page) {
	case "home":
	include "pages/home.php";
	break;

	case "projects":
	include "pages/projects.php";
	break;

	case "about":
	include "pages/about.php";
	break;

	case "writing":
	include "pages/writing.php";
	break;

	case "style-guide":
	include "pages/style-guide.php";
	break;

	case "contact":
	include "pages/contact.php";
	break;

	case "experiments":
	include "pages/experimental.php";
	break;

	case checkPages($page) === "false":
	include "pages/404.php";
	break;

	case "0":
	// include "pages/404.php";
	echo "EXPERIMENTAL DETAIl";
	break;

	default:
	include "pages/home.php";
}
?>