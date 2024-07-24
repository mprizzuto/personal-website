<?php
// echo "TEST";
// // if isFirstPageLoad, incude home page
// echo "FIRST OAGE LOAD" . isFirstPageLoad();
// if ( isFirstPageLoad() ) {

// 	include "../src/templates/pages/home.php";	
// }
// if $_GET array has count a"

if ( count($_GET) ) {
	// echo "GET HAS COUNT" . formatVar($_GET);
	// nd it doesnt include "page 
	if ( !isPageQueryValid() ) {
		include "../src/templates/pages/404.php";
	}

}

if ( isPageQueryValid() ) {
	/*main page router*/ 
	switch (getPage()) {
		case "home":
		case "":
		// if first pagge load
			include "../src/templates/pages/home.php";
			break;

		case "projects":
			include "../src/templates/pages/projects.php";
			break;

		case "project":
			include "../src/templates/pages/project.php";
			break;

		case "about":
			include "../src/templates/pages/about.php";
			break;

		case "writing":
			include "../src/templates/pages/writing.php";
			break;

		case "style-guide":
			include "../src/templates/pages/style-guide.php";
			break;

		case "contact":
			include "../src/templates/pages/contact.php";
			break;

		case "experiments":
			include "../src/templates/pages/experiments.php";
			break;

		case "site-map":
			include "../src/templates/pages/site-map.php";
			break;	

		// project details router
		case "project-detail":
			include "./database/project-details-database.php";
			break;

		// experiment detail router
		case "experiment-detail":
			include "../src/database/experiment-details-database.php";
			break;

		// writing details router
		case "blog-post-detail":
			include "../src/database/writing-detail-database.php";
			break;


		case "goals":
			include "../src/templates/pages/goals.php";
			break;

		case "resume":
			include "../src/templates/pages/resume.php";
			break;

		//case study page
		case "case-study":
			include "../src/templates/pages/case-studies.php";
			break;

		case "style-guide":
			include "../src/templates/pages/style-guide.php";
			break;	

		case "null":
			include "../src/templates/pages/home.php";
			break;

	  case "now":
	    include "../src/templates/pages/now.php";
	    break;  


		default:
			// include "pages/home.php";
		include "../src/templates/pages/404.php";
	}
}



?>
