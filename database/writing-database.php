<?php 
// var_dump($_GET);
$writingList = [
	[
		"id" => "agile-sprinting",
		"date" => "july 9th, 2021",
		"title" => "My first agile sprint",
		"description" => "my fird time doing an agile sprint",
		"category" => "project-management",
	],
	[
		"id" => "personal-website-case-study",
		"date" => "nov 16, 2021",
		"title" => "personal website case study",
		"description" => "a case study detaiing my personal website work",
		"category" => "case-study",
	],
];

/*
"id" => "",
"date" => "",
"title" => "",
"description" => "",
"category" => "",
*/ 

// function getPosts($data, $key, $value)
// {
//   $posts = array_filter($data, function ($post) use ($key, $value) {
//     return $post[$key] == $value;
//   });
//   return $posts;
// }

// $caseStudy = getPosts($writingList, "category", "case-study");
// $caseStudy = getPosts($writingList, "category", "case-study");

?>

<section class="article">
	<?php include "./images/svgs/left-quote.svg";?>
	<?php foreach ($writingList as $list) {?>
		
	<writing-card>
		<h2><a href="?page=blog-post-detail&post-detail=<?=$list["id"]?>"><?=$list["id"]?></a></h2>
		<ul>
			<li><?=$list["date"]?></li>
			<li><?=$list["title"]?></li>
			<li><?=$list["description"]?></li>

			<!-- maybe this is a link? -->
			<li><?=$list["category"]?></li>
		</ul>

	</writing-card>
	<?php }?>
	<?php include "./images/svgs/right-quote.svg";?>
</section>

