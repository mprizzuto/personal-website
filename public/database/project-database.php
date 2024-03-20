<?php 
$jsonProjects = file_get_contents("./database/projects.json");
$projectList = json_decode($jsonProjects, true);
?>
