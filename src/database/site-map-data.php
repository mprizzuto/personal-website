<?php 
$siteData = [
	"home" => [
    getNavData(),
	],
	"projects" => [
		"projects" => [getAllProjects()],
		"project detail" => ["detail1", "detail2"],
		"about" => ["writing", "resume", "goals", "contact"],
		"experiments" => getAllExperiments(),
	],
  "about"
];
?>