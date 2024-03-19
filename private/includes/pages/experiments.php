<?php
include 'database/experiment-database.php';
include 'detail-router.php';
?>
<section class="experiments">
  <inner-column>
    <h2 class="design-title">web
    </h2>

    <?php foreach($experimentsList as $experiment): ?>
      <experiment-card class="experiment-experiment-card">
        <details open>
          <summary><?=$experiment["name"]?></summary>
          <p><?=$experiment["purpose"]?></p>
          <a href="<?=$experiment["link"]?>"><?=$experiment["name"]?></a>
        </details>
      </experiment-card>
     <?php endforeach; ?> 

    <h2>design</h2>
    <h2 class="experiments-title"><span>experi</span><span class="ments">ments</span></h2>
    
  </inner-column>
</section>
  