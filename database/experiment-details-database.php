<?php 
// require "./functions.php";
// $experimentDetail = $_GET["page"] ?? null;
$experimentDetail = $_GET["experiment-detail"] ?? null;
$experiment = $_GET["experiment"];
// var_dump($_GET);
// var_dump($experimentDetail);

$experimentDetailsList = [
	[
		"experiment-name" => "jan tshchiold responsive layout",
		"hypothesis" => "I can translate a print latput to a web layout successfully",
		"materials" => "skitch, affinity designer",
		"picture" => "https://via.placeholder.com/150",
		"alt" => "",
		"results"  => "I was able to make the layout responsive, but this was originally a print layout. Some things just didn't translate to the digital medium, especially across different screen sizes",
	],
	[
		"experiment-name" => "svg and grid study",
		"hypothesis" => "can i combine my skills of svg and grid?",
		"materials" => "skitch, affinity designer, pen and paper",
		"picture" => "https://via.placeholder.com/150",
		"alt" => "",
		"results"  => "everything went well and everone clapped",
	],
];
/*
	"experiment-name" => "",
	"hypothesis" => "",
	"materials" => "",
	"picture" => "https://via.placeholder.com/150",
	"alt" => "",
	"results"  => "",

*/

	

/*
	function experimentDetailBuilder(string $name, string $hypothesis, string $materials, string $image, string $alt, string $result):void
*/ 

	switch ($experiment) {
		case "art-poster":
			experimentDetailBuilder("jan tschichold art poster", "can i make a poster art responsive?", "skitch, affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, i was successful!");
			break;

			case "svg-grid-study":
			experimentDetailBuilder("svg-grid-study", "can i combine SVGS and grid to make a cool layout?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, a funky layout with SVGs!");
			break;

			case "ts-symptom-checker":
			experimentDetailBuilder("TS symptom checker", "can i create a form with seamless UX to empower people with TS to report their symptoms?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, the users found the form easy to fill out and use!");
			break;

			case "transform-rotate":
			experimentDetailBuilder("transform-rotate", "can i use CSS to positons, transform and rotate elements?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, a cool transformations and rotationss!");
			break;


		
		default:
			echo "something went wrong";
			break;
	}
?>