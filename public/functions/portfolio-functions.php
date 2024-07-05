<?php function generatePortfolio(iterable $portfolioData) {?>
	<ul>
	<?php foreach ($portfolioData as $portfolio): ?>
		<li>
			<?=$portfolio["name"]?>
			
			<ul>
				<li><?=$portfolio["description"]?></li>
				<li><a href="<?=$portfolio["link"]?>"><?=$portfolio["name"]?></a></li>
			</ul>
		</li>
	<?php endforeach; ?>
	</ul>
<?php }?>