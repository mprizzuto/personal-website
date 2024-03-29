<?php
/*main page router*/ 
switch (getPage()) {
	case "home":
		include "./includes/pages/home.php";
		break;

	case "projects":
		include "./includes/pages/projects.php";
		break;

	case "project":
		include "./includes/pages/project.php";
		break;

	case "about":
		include "./includes/pages/about.php";
		break;

	case "writing":
		include "./includes/pages/writing.php";
		break;

	case "style-guide":
		include "./includes/pages/style-guide.php";
		break;

	case "contact":
		include "./includes/pages/contact.php";
		break;

	case "experiments":
		include "./includes/pages/experiments.php";
		break;

	case "site-map":
		include "./includes/pages/site-map.php";
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
		include "./database/writing-detail-database.php";
		break;


	case "goals":
		include "./includes/pages/goals.php";
		break;

	//resume page
	case "resume":
		include "./includes/pages/resume.php";
		break;

	//case study page
	case "case-study":
		include "./includes/pages/case-studies.php";
		break;

	case "style-guide":
		include "./includes/pages/style-guide.php";
		break;	

	case "null":
		include "pages/home.php";
		break;

	case "":
		include "./includes/pages/home.php";
		break;

	default:
		// include "pages/home.php";
	include "pages/404.php";
}

?>
