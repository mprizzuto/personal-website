<?php 
// var_dump($_GET);
@require "writing-data.php";

/*
"id" => "",
"date" => "",
"title" => "",
"description" => "",
"category" => "",
*/ 

?>

<section class="article">
	<?php include "./assets/images/svgs/left-quote.svg";?>
	<?php foreach ($writingList as $list) {?>
		
	<inner-column>
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
	</inner-column>
	<?php }?>
	<?php include "./assets/images/svgs/right-quote.svg";?>
</section>

