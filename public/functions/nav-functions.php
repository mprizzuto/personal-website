<?php
function globalNav() {
	include "./database/nav-data.php";

	$globalLinks = ["home", "about", "projects", "experiments"];

	foreach($navLinks as $navLinkText => $navLink) {
    if ( in_array($navLinkText, $globalLinks) ) {
    	// if first page load or empty query string,[]
    	// echo $linkTemplate;
    	echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
    }
  }
}
?>