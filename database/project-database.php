project database.php
<?php 
	$projectList= [
		[
			"id" => "responsive-layout-challenge",
      'name' => "responsive layout challenge",
      "image" => "https://via.placeholder.com/150",
      "alt" => "descriptive alt text",
      "description" => "responsive layout patterns",
      "url" => "?page=project-detail&project=responsive-layout",
		],
		[
			"id" => "accessibility-challenge",
			"name" => "accessibility challenge",
			"image" => "https://via.placeholder.com/150",
			"alt" => "descriptive alt text",
			"description" => "a study using semantic HTML and best practices to create the msot accessible website possible",
			"url" => "?page=project-detail&project=accessibility",
		],
		[
			"id" => "theming-challenge",
			"name" => "theming challenge",
			"image" => "https://via.placeholder.com/150",
			"alt" => "descriptive alt text",
			"description" => "we all had the same HTML, the challenge was to research styles for our niche and dress up the HTML",
			"url" => "?page=project-detail&project=theming-challenge",
		],
		[
			"id" => "exercises-for-programers",
			"name" => "exercises for programers",
			"image" => "https://via.placeholder.com/150",
			"alt" => "descriptive alt text",
			"description" => "programming exercises using PHP and JavaScript",
			"url" => "?page=project-detail&project=efp",
		],
	];

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

var_dump($_GET);
  


  //  switch ($_GET["project"] ?? null) {
  //  case "responsive-layout":
  //    echo "responsive layout";
  //    break;
    
  //  default:
  //    echo "404";
  //    break;
  // }
?>



