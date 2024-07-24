<?php include "../src/database/site-map-data.php";?>

<section class=<?=getClassByQuery()?>-section>
	<inner-column>
		<?php templateSiteMap($siteData); ?>
	</inner-column>
</section>