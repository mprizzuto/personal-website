<?php 
echo "writing datatbase";
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

function getPosts($data, $key, $value)
{
  $posts = array_filter($data, function ($post) use ($key, $value) {
    return $post[$key] == $value;
  });
  return $posts;
}

$caseStudy = getPosts($writingList, "category", "case-study");
$caseStudy = getPosts($writingList, "category", "case-study");


?>

<?php foreach ($writingList as $list) {?>
<card>
	<p><a href="?detail=<?=$list["id"]?>"><?=$list["id"]?></a></p>
	<p><?=$list["date"]?></p>
	<p><?=$list["title"]?></p>
	<p><?=$list["description"]?></p>
	<p><?=$list["category"]?></p>

</card>
<?php }?>