<?php 

 // var_dump($_GET);
 $writingDetail = $_GET["post-detail"] ?? null;
 // echo $writingDetail;
?>

<?php function writingDetailGenerator($title, $image, $alt, $description, $link, $teaser) { ?>

		<writing-detail>
			<h2><?=$title?></h2>
			<picture>
				<img src="<?=$image?>" alt="$<?=$alt?>">
			</picture>
				<p><?=$description?></p>
				<a href="<?=$link?>" target="_blank"><?=$teaser?></a>
			</writing-detail>
			
		
<?php }?>


<?php 
switch ($writingDetail) {
	case 'agile-sprinting':
		writingDetailGenerator("agile-sprinting", "./images/blog-images/sprint.png", "a design sprint schedule", "agile sprintign is fun and is defined as a sprint where people work towards goals undr a  time constraint", "https://marcor.substack.com/", "sprint on!");
		break;

	case 'personal-website-case-study':
		writingDetailGenerator("personal website case study", "./images/svgs/experimental.svg", "a grid of funky shapes", "come see how i approached making my personal website", "https://marcor.substack.com/",  "study it");
		break;
	
	default:
		echo "smethings wrong: $writingDetail doesnt exist";
		break;
}
?>