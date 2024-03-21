<section>
  <inner-column>
  	<?php 
  	//get case study data
  	$caseStudy = getCaseStudyBySlug($_GET["slug"]);
  	//show data
  	?>

  	<h2><?=$caseStudy["title"]?></h2>
  	<p><?=$caseStudy["hypothesis"]?></p>
  	<p><?=$caseStudy["conclusion"]?></p>


  </inner-column>
</section>