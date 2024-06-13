<?php include "database/site-map-data.php";?>

<section class=<?=getClassByQuery()?>-section>
	<inner-column>
		<h2>Website overview</h2>
		
		<?=formatSitemap($siteData)?>
	</inner-column>
</section>