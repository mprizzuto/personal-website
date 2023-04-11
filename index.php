<?php require "modules/header.php"?>
<main class=<?php echo getClassByQuery() . "-main"?> >
  <article class=<?php echo getClassByQuery() . "-article"?>>
    <header class="article-header">
      <inner-column>
        <h1><?=generatePageTitle()?></h1>
      </inner-column>
    </header>

    <?php require "page-router.php";?>
  </article>
</main>

<?php require "modules/footer.php";
