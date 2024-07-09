<?php 
$jsonProjects = file_get_contents("../src/database/projects.json");
$projectList = json_decode($jsonProjects, true);
?>
