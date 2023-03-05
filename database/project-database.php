PROJECT DATABASE.PHP
<?php 
$jsonProjects = file_get_contents("projects.json");
$projectList = json_decode($jsonProjects, true);
?>
