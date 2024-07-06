<?php
function globalNav() {
	include "./database/nav-data.php";

	$globalLinks = ["home", "about", "projects", "experiments"];

	foreach($navLinks as $navLinkText => $navLink) {
    if ( in_array($navLinkText, $globalLinks) ) {
    	echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
    }
  }
}


function aboutPageNav() {
	include "database/nav-data.php";

	$aboutLinks = ["about", "writing", "resume", "goals", "contact"];

	echo "<aside class='about-links'>" . "<inner-column>" . "<h2>curious about me?</h2>" . "<nav class='about-page-nav'>";

  foreach($navLinks as $navLinkText => $navLink) {
    if ( in_array($navLinkText, $aboutLinks)) {
			echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
    }
  }
  echo "</nav>" . "</inner-column>" . "</aside>";
}
?>
