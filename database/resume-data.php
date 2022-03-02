<?php 
// $resumeData = [
// 	[
// 		"education" => "queensboro community college. BA",
// 		"experience" => [
// 			"Perpetual Education Beta tester. My responsibilities included", "colloboration and feedback on lesson content", "accessibility testing: offering feedback from the perspective of someone with learning differences"],
// 	],
// 	[
// 	  "non-technical-skills" => ["writing", "proofreading", "public speaking", "photography"],
// 		"technical-skills" => ["HTML", "CSS", "PHP", "JavaScript", "Git"],
// 	],
// 	[
// 		"accomplishments" => [
// 			 "overcoming my ADHD and tourettes to learn the languages of the web",
// 		]
// 	]
// ];

//lets try a more simple data structure
$resumeData = [
	[
		"education" => "queensboro community college. BA",
		"experience" => 
			"Perpetual Education Beta tester. My responsibilities included <br>colloboration and feedback on lesson content <br> accessibility testing: offering feedback from the perspective of someone with learning differences",
	],
	[
	  "non-technical-skills" => "writing proofreading public speaking photography",
		"technical-skills" => "HTML <br>CSS <br>PHP <br>JavaScript <br>Git",
	],
	[
		"accomplishments" =>
			 "overcoming my ADHD and tourettes to learn the languages of the web", "beta-testing for Perpetual Education", "something"
	]
];
?>