<?php 
//get project data
$project = getProjectBySlug($_GET["slug"]);
// formatVar($project);
//show projects
?>

<h1><?=$project["title"]?></h1>
<p><?=$project["description"]?></p>

<?php //include the project based on the query string
switch ($_GET["slug"]) {
	case "responsive-layout":
		// echo "responsive latout";
	include "./projects/responsive-layout/index.php";
		break;
	
	default:
		echo "no project chosen";
}
?>



