<?php 
// $TODO- change current photos to those that match my hobbies
$aboutData = [
	[
		"heading" => "About Marco",
		"my-story" => "I have tourettes syndrome, and while that comes with certain difficulties (like tics and ADHD) it also gives me a unique perspective as a user. I was lucky enough to use and hone this skill as a Perpetual.education(PE) beta tester.They have been critical to my success as a web developer and programmer, and I wouldnt be where I am today if not for them. I look forward to using everyijng I learned at PE to create a better-designed web and accessible. <span class='hobby-intro'> When i am not programming websites, I enjoy</span>",
		"hobbies" => ["baking sourdough bread", "photography", "and playing guitar"],
		"photos" => ["./images/mr-photos/flower.jpg" => "the flowers are blooming", "./images/mr-photos/bw-branches.jpg" => "before the world wide web, tree branches were the original network", "./images/mr-photos/tree-shadow.jpg" => "we all stand in the shadow of the those who came before us"],
	],
];

?>

<?php foreach($aboutData as $data): ?>
<about-card>
	<h2><?=$data["heading"]?></h2>
	<p><?=$data["my-story"]?></p>
		<?php foreach($data["hobbies"] as $hobby): ?>
			<li><?=$hobby?></li>
		<?php endforeach; ?>
		<h2>random photos</h2>
		<?php foreach($data["photos"] as $photo => $alt): ?>
			<figure class="hobby-figure">
				<picture class="hobby-photo">
					<img src="<?=$photo?>" alt="<?=$alt?>">
				</picture>

			</figure>
		<?php endforeach; ?>
	<?php endforeach; ?>

	<?php aboutPageNav();?>
</about-card>
