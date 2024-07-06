<?php
function globalNav() {
	include "./database/nav-data.php";

	$globalLinks = ["home", "about", "projects", "experiments"];

	foreach($navLinks as $navLinkText => $navLink) {
    if ( in_array($navLinkText, $globalLinks) ) {
    	if ( !isFirstPageLoad() ) {
    		echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
    	}
    	// if its the first page load
    	if ( isFirstPageLoad() ) {
    		// if current item is home
    		if ($navLinkText === "home") {
    			// style it and continue
    			 echo " " . "<a style = 'border-bottom: 2px solid maroon; padding-bottom: 2px' href='$navLink'" . $navLinkText . ">" . $navLinkText . "</a>";
    			 continue;
    		}
    		echo " " . "<a href='$navLink'" . $navLinkText . ">" . $navLinkText . "</a>";
    		// template out the rest of the links
    	}
    	// this should only happen if it isnt the first time loading the page
    		// echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
    	// echo " " . "<a href='$navLink'" . $navLinkText . ">" . $navLinkText . "</a>";
    	// if first time laoding page,
    		// style home link
    		//  continue outputting regular links without style

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
