<?php
function styleAnchorLink($slug) {
	// TODO. abstract out $navLinkStyle rule into its own function.
	$queryString = $_GET["page"] ?? null;
	$navLinkStyle = " style = 'border-bottom: 2px solid maroon; padding-bottom: 2px'";

	switch ($slug === getQueryString()) {
		case "home":
		  return $navLinkStyle;
			break;

		case "projects":
			return $navLinkStyle;
			break;

		case "about":
			return $navLinkStyle;
			break;
      // ^^^ why do i have to keep these cases, if they are coming in from the database?!


    // i can probably delete the cases below
		// case "writing":
		// 	return $navLinkStyle;
		// 	break;

		// case "goals":
		// 	return $navLinkStyle;
		// 	break;

		// case "resume":
		// 	return $navLinkStyle;
		// 	break;

		// case "contact":
		// 	return $navLinkStyle;
		// 	break;	

		// // case "experiments":
		// // 	return $navLinkStyle;
		// // 	break;

		// // case "site-map":
		// // 	return $navLinkStyle;
		// // 	break;

    // case "style-guide":
    //   return $navLinkStyle;
    //   break;  	
	}

}
?>