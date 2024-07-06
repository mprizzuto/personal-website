<?php
function styleAnchorLink($slug) {
	// TODO. abstract out $navLinkStyle rule into its own function.
	$queryString = $_GET["page"] ?? null;
	$navLinkStyle = " style = 'border-bottom: 2px solid maroon; padding-bottom: 2px'";
	// if $queryString  is null, or  is empty string
	// if ($queryString === null || $queryString === "") {
	// 	// echo "HOMEPAGE";
	// 	return $navLinkStyle;
	// }

	if (isFirstPageLoad()) {
		// return $navLinkStyle;
		// echo "1st";
	}

	// if ($slug)
	// echo "SLUG!!" . $slug . "qs" . getQueryString();
	switch ($slug === getQueryString()) {
		case "home":
    // case $slug === "":
    // case $slug === null:
		  return $navLinkStyle;
			break;

		case "projects":
			return $navLinkStyle;
			break;

		case "about":
			return $navLinkStyle;
			break;

		case "writing":
			return $navLinkStyle;
			break;

		case "goals":
			return $navLinkStyle;
			break;

		case "resume":
			return $navLinkStyle;
			break;

		case "contact":
			return $navLinkStyle;
			break;	

		case "experiments":
			return $navLinkStyle;
			break;

		case "site-map":
			return $navLinkStyle;
			break;	
	}


	// if the query param page isnt in the $GET array, return ?
}
?>