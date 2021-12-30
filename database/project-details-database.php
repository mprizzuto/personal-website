<?php 
require "functions.php";

// maybe i can find a way to loop through these with the function I made..
$detailOne = [
	"name" => "Responsive layout",
	"skills" => "CSS layout",
	"image" => "https://via.placeholder.com/150",
	"alt" => "descriptive alt text",
	"description" => "The responsive layout was part of the core Perpetual Education curriculum. We learned how to research and spot design patterns and recreate common (and abstract) design patterns using CSS flexbox and grid",
	"url" => "../projects/responsive-layout",
];

	$detailTwo = [
		"name" => "css theme challenge",
		"skills" => "css theming",
		"image" => "https://via.placeholder.com/150",
		"alt" => "descriptive alt text",
		"description" => "this chalenge involved researching websites in a specific domain (real estate, in my case) and then using css to dress it up. We were all given the same HTML.",
		"url" => "../projects/",
	];

	$detailTwo = [
		"name" => "accessibility challenge",
		"skills" => "accessibility",
		"image" => "https://via.placeholder.com/150",
		"alt" => "descriptive alt text",
		"description" => "this chalenge involved using semantic HTML and screen readers to provice the best UX possibile for users with disabilities",
		"url" => "../projects/",
	];


// i couldnt find a way to template this out AND include the proper data based on the query string. so i split it up into individual arrays above... I can always refactor later!!
// $projectDetailList = [
// 	[
// 		"name" => "Responsive layout",
// 		"skills" => "CSS layout",
// 		"image" => "https://via.placeholder.com/150",
// 		"alt" => "descriptive alt text",
// 		"description" => "The responsive layout was part of the core Perpetual Education curriculum. We learned how to research and spot design patterns and recreate common (and abstract) design patterns using CSS flexbox and grid",
// 		"url" => "../projects/responsive-layout",
// 	],
// 	[
// 		"name" => "css theme challenge",
// 		"skills" => "css theming",
// 		"image" => "https://via.placeholder.com/150",
// 		"alt" => "descriptive alt text",
// 		"description" => "this chalenge involved researching websites in a specific domain (real estate, in my case) and then using css to dress it up. We were all given the same HTML.",
// 		"url" => "../projects/",
// 	],

//];


/*add more
[
	"name" => "",
	"skills" => "",
	"image" => "https://via.placeholder.com/150",
	"alt" => "descriptive alt text",
	"description" => "",
	"url" => "../projects/",
],
*/

// just trying to find a clean way to template the data
// array or project details
// $projectDetailList = [$detailOne, $detailTwo];


// get details page query string or coalesce to null
$projectDetail = $_GET["project"] ?? null;

// check the details page
// var_dump($projectDetail);

?>


<?php if ($projectDetail === "responsive-layout"): ?>
	
	<?php 
	projectDetailBuilder("Responsive layout details", "CSS layout- what i learned", "https://via.placeholder.com/150", "descriptive alt text", "The responsive layout was part of the core Perpetual Education curriculum. We learned how to research and spot design patterns and recreate common (and abstract) design patterns using CSS flexbox and grid", "../projects/responsive-layout");

	?>
<?php endif; ?>


<?php if ($projectDetail === "theming-challenge"): ?>
	
	<?php 
	projectDetailBuilder("theming challenge details", "CSS theming challenge- what i learned", "https://via.placeholder.com/150", "descriptive alt text", "this project involved.. insert details here");
	?>
<?php endif; ?>

<?php if ($projectDetail === "accessibility"): ?>
	
	<?php 
	projectDetailBuilder("accessibility challenge details", "accessibility", "https://via.placeholder.com/150", "descriptive alt text", "The responsive layout was part of the core Perpetual Education curriculum. We learned how to research and spot design patterns and recreate common (and abstract) design patterns using CSS flexbox and grid", "../projects/responsive-layout");
	?>
<?php endif; ?>






