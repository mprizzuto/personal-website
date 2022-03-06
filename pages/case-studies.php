<?php 
//get case study data
$caseStudy = getCaseStudyBySlug($_GET["slug"]);
//show data
?>

<h1><?=$caseStudy["title"]?></h1>
<p><?=$caseStudy["hypothesis"]?></p>
<p><?=$caseStudy["conclusion"]?></p>



