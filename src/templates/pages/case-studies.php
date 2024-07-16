<section>
  <inner-column>

  	<?php 
    	$caseStudy = getCaseStudyBySlug($_GET["slug"] ?? null);
  	?>

    <?php if ($caseStudy): ?>
      <h2><?=$caseStudy["title"] ?? null?></h2>
      <p><?=$caseStudy["hypothesis"] ?? null?></p>
      <p><?=$caseStudy["conclusion"] ?? null?></p>
      
      <?php else: ?>
      <p><mark>invalid case study</mark>. check the link and try again</p>
    <?php ENDIF; ?>  
  	
  </inner-column>
</section>