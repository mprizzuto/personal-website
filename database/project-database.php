<?php 
$projectList= [
[
	"id" => "responsive-layout-challenge",
  "name" => "responsive layout challenge",
  "image" => "https://via.placeholder.com/150",
  "alt" => "descriptive alt text",
  "description" => "responsive layout patterns",
  "project-url" => "?page=project&project=responsive-layout",
  "case-study" => "?page=case-study&case-study=",
],
[
	"id" => "accessibility-challenge",
	"name" => "accessibility challenge",
	"image" => "https://via.placeholder.com/150",
	"alt" => "descriptive alt text",
	"description" => "a study using semantic HTML and best practices to create the msot accessible website possible",
	"project-url" => "?page=project&project=responsive-layout",
	"case-study" => "?page=case-study&case-study=",
],
[
	"id" => "theming-challenge",
	"name" => "theming challenge",
	"image" => "https://via.placeholder.com/150",
	"alt" => "descriptive alt text",
	"description" => "we all had the same HTML, the challenge was to research styles for our niche and dress up the HTML",
	"project-url" => "?page=project&project=theming-challenge",
	"case-study" => "?page=case-study&case-study=",
],
[
	"id" => "exercises-for-programers",
	"name" => "exercises for programers",
	"image" => "https://via.placeholder.com/150",
	"alt" => "descriptive alt text",
	"description" => "programming exercises using PHP and JavaScript",
	"project-url" => "?page=project&project=efp",
	"case-study" => "?page=case-study&case-study=",
],
];

$jsonProjects = json_encode($projectList);

/*add more
[
	"" => "",
	"name" => "",
	"image" => "",
	"alt" => "descriptive alt text",
	"description" => "",
	"url" => "",
],
*/ 

// var_dump($_GET);

?>



