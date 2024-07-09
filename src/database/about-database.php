<?php 
// $TODO- change current photos to those that match my hobbies
$aboutData = [
	[
		"heading" => "About Marco",
		"my-story" => "As an original PE beta-tester, I had the privilege to help shape and test some of the early lessons. It was through my relationships with Derek and other PEople that I was able to practice and hone my User Experience and Accessibility skills. As a Neurodiverse (Tourettes) Web Developer and User, I have felt the pains first-hand of learning (online and offline) in a world that isn't built for people like us. <br><br> I’m committed to building a more inclusive web experience. I bring a passion and divergent thought process to whatever project I tackle. <span class='hobby-intro'> When I am not programming websites, I enjoy:</span>",
		"hobbies" => ["baking bread (usually sourdough)", "photography (urban landscape)", "Exercise (jumping rope/boxing)"],
	"photos" => ["./assets/images/mr-photos/mobile/flowers.jpg" => "the flowers are blooming", "./assets/images/mr-photos/mobile/bw-shadows.jpg" => "before the world wide web, tree branches were the original network", "./assets/images/mr-photos/mobile/bw-branches.jpg" => "we all stand in the shadow of the those who came before us"],
	],
];

?>

<?php foreach($aboutData as $data): ?>
	<about-card>
		<h2><?=$data["heading"]?></h2>
		
		<p><?=$data["my-story"]?></p>
		
		<ul class="hobby-list">
			<?php foreach($data["hobbies"] as $hobby): ?>
				
					<li><?=$hobby?></li>
				
			<?php endforeach; ?>
		</ul>
		
		<h2 class="favorite-photo-title">my favorite photos</h2>
		
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
