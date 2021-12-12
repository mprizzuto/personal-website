<?php 
$page = $_GET["page"] ?? null;
// var_dump($page);

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

	case !in_array($page, $_GET):
	include "pages/404.php";
	break;

	default:
	include "pages/home.php";
}
?>