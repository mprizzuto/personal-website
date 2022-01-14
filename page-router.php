<?php 
require "functions.php";
$page = $_GET["page"] ?? null;
$experimentDetail = $_GET["experiment-detail"] ?? null;

function getPage() {
	$page = $_GET["page"] ?? null;
	return $page;
}

// function formatVar($input) {
// 	echo "<pre>";
// 	var_dump($input);
// 	echo "</pre>";
// }

// formatVar($experimentDetail);
// formatVar(getPage());

// a function that is used in the control flow for the 404 page
function checkPages($page) {
	// compare $pages against a list of known strings
	$pageList = ["home", "projects" , "about", "writing", "style-guide", "contact", "experiments", "project-detail", "experiment-detail", "blog-post-detail"];

	// return "true" if page exists, otherwise return "false"
	return in_array($page, $pageList) ? "true" : "false";
}



/*project details router*/

// switch ($_GET) {
// 	case "responsive-layout";
// 		// code...
// 	echo "responsive layout.php";
// 		break;
	
// 	default:
// 		echo "404";
// 		break;
// }

/*main page router*/ 
switch (getPage()) {
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


	// project details router
	case "project-detail":
	include "./database/project-details-database.php";
	break;

	// experiment detail router
	case "experiment-detail":
	include "./database/experiment-details-database.php";
	break;

	// writing details router
	case "blog-post-detail":
	include "./database/writing-details-database";
	break;

	// 404 page
	case checkPages($page) === "false":
	include "pages/404.php";
	break;


	default:
	include "pages/home.php";
}


?>