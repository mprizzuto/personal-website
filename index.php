<?php require "modules/header.php"?>
<main class="<?=$queryString ?? "home"?>-main">
  <article class="<?=$queryString?>-article">
    <header class="article-header">
      <inner-column>
        <h1><?=generatePageTitle()?></h1>
      </inner-column>
    </header>
    <?php 
    require "page-router.php";
    
    ?>
  </article>
</main>

<?php require "modules/footer.php";
