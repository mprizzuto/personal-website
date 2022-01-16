<?php 

 // var_dump($_GET);
 $writingDetail = $_GET["post-detail"] ?? null;
 // echo $writingDetail;
	$writingDetailList = [
		[
			"title" => "agile sprinting",
			"teaser" => "agile sprintign is fun and is defined as a sprint where people work towards goals undr a  time constraint",
			"link" => "https://marcor.substack.com/",
		],
		[
			"title" => "",
			"teaser" => "pesonal website case s`tudy",
			"link" => "https://marcor.substack.com/",
		],
	];

	// "teaser" => "",
	// 	"link" => "https://marcor.substack.com/",


?>

<?php function writingDetailGenerator($title, $description, $link, $teaser) { ?>

		<writing-detail>
			<h2><?=$title?></h2>
				<p><?=$description?></p>
				<a href="<?=$link?>"><?=$teaser?></a>
			</writing-detail>
			
		
<?php }?>


<?php 
switch ($writingDetail) {
	case 'agile-sprinting':
		writingDetailGenerator("agile-sprinting", "agile sprintign is fun and is defined as a sprint where people work towards goals undr a  time constraint", "https://marcor.substack.com/",  "sprint on!");
		break;

	case 'personal-website-case-study':
		writingDetailGenerator("personal website case study", "come see how i approached making my personal website", "https://marcor.substack.com/",  "study it");
		break;
	
	default:
		echo "smethings wrong: $writingDetail doesnt exist";
		break;
}
?>