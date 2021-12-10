
    <?php
    include 'experiment-info.php';
    ?>
    <main class="designer-experiments">
      <article class="web-experimental">
        <section class="visual-design">
          <inner-column>
            <h1 class="design-title">web</h1>

            <?php foreach($experimentList as $experiment): ?>
              <card class="project-card">
                <details open>
                  <summary><?=$experiment["name"]?></summary>
                  <p><?=$experiment["purpose"]?></p>
                  <a href="<?=$experiment["link"]?>" target="_blank"><?=$experiment["name"]?></a>
                </details>
              </card>
             <?php endforeach; ?> 

            <h2>design</h2>
            <h2 class="experiments-title"><span>experi</span><span class="ments">ments</span></h2>
            
          </inner-column>
        </section>
  