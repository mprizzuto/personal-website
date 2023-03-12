PROJECT.PHP
<?php 

//get project data
$project = getProjectBySlug($_GET["slug"]);

//show projects
?>

<h1><?=$project["title"] ?? null ?></h1>



