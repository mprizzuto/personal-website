<section>
  <inner-column>

  	<?php 
    	$caseStudy = getCaseStudyBySlug($_GET["slug"] ?? null);
  	?>

    <?php if ($caseStudy): ?>
      <h2><?=$caseStudy["title"] ?? null?></h2>
      <p><strong>case study:</strong> <?=$caseStudy["conclusion"] ?? null?></p>
      
      <?php
      if ( is_array($caseStudy["hypothesis"]) ) {
        foreach ($caseStudy["hypothesis"] as $hypothesis) {
          echo "<p>" . $hypothesis . "</p>";
        }
      }
        
      ?>
      <?php else: ?>
      <p><mark>invalid case study</mark>. check the link and try again</p>
    <?php ENDIF; ?>  
  	
  </inner-column>
</section>