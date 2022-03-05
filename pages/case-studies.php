<?php 
$caseStudies = file_get_contents("./database/case-studies.json");
$caseStudyList = json_decode($caseStudies, true);
$caseStudy = $_GET["slug"] ?? null;
// formatVar($caseStudyList);
?>

<?php if($caseStudy === "responsive-layout-cs"): ?>
	<?=generateCaseStudy("h2", $caseStudyList, 0, "title")?>
	<?=generateCaseStudy("p", $caseStudyList, 0, "hypothesis")?>
	<?=generateCaseStudy("p", $caseStudyList, 0, "conclusion")?>

<?php endif; ?>

<?php if($caseStudy === "theming-challenge-cs"): ?>
	<?=generateCaseStudy("h2", $caseStudyList, 1, "title")?>
	<?=generateCaseStudy("p", $caseStudyList, 1, "hypothesis")?>
	<?=generateCaseStudy("p", $caseStudyList, 1, "conclusion")?>
<?php endif; ?>