<?php function formatSitemap(array $sitemapData) { ?>
	<?php echo "<ul class='site-map-list'>"?>	
		<?php foreach($sitemapData as $levelOneKey => $levelOneValue):?>
			
			<?php echo "<li>" . "<h3>$levelOneKey</h3>"; ?>
				<?php echo "<ul class='home-page-list'>"; ?>

					<?php foreach($levelOneValue as $levelTwoKey => $levelTwoValue): ?>
					
						<?php if ($levelTwoKey === "projects"): ?>
							
								<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>"; ?>

									<?php echo "<ul class='sitemap-project-list'>"; ?>

										<?php foreach($levelTwoValue as $projectKey => $projectValue): ?>
											<?php echo "<li>" . $projectValue["title"] . "</li>"; ?>
														
															<?php echo "<li>" . $projectValue['title'] . " detail page</li>"; ?>
															<?php echo "<li>" . $projectValue['title'] . " case study page". "</li>"; ?>
										<?php endforeach; ?>
									<?php echo "</ul>"; ?>
								<?php "</li>"; ?>	
						<?php endif; ?>

					<?php if($levelTwoKey === "about"): ?>
						<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>" ?>
							<?php echo "<ul class='sitemap-about-list'>"; ?>
							<?php foreach($levelTwoValue as $aboutArrIndex): ?>
								<li><?=$aboutArrIndex?></li>
							<?php endforeach;?>
							<?="</ul>"?>
						<?="</li>";?>
					<?php endif; ?>


					<?php if($levelTwoKey === "experiments"): ?>
						<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>" ?>
							<?php echo "<ul class='experiment-list'>"; ?>
								<?php foreach($levelTwoValue as $experimentArrIndex => $experimentIndexValue): ?>
									<?php echo "<li>" . $experimentIndexValue["name"] . "</li>"?>
								<?php endforeach;?>	
							<?="</ul>"?>
						<?="</li>";?>
					<?php endif; ?>


					<?php endforeach; ?>
				<?php echo "</ul>";?>		
		<?php endforeach; ?>
	<?php echo "</ul>"?>

<?php }?>

<?php
function styleSitemapLink() {
	$navLinkStyle = " style = 'border-bottom: 2px solid maroon; padding-bottom: 2px'";
	if (getQueryString() === "site-map" && 
		getQueryString() != null) {
		// return "";
		return $navLinkStyle;
	}
	return "";
}
?>