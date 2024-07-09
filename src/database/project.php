PROJECT.PHP
<?php 

//get project data
$project = getProjectBySlug($_GET["slug"]);

//show projects
?>

<h2><?=$project["title"] ?? null ?></h2>



