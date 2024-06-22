<?php require "./assets/includes/modules/header.php"?>

<main class=<?php echo getClassByQuery() . "-main"?> >
  <article class=<?php echo getClassByQuery() . "-article"?>>
    <header class="article-header">
      <inner-column>
        <h1><?=generatePageTitle()?></h1>
      </inner-column>
    </header>

    <?php require "./routers/page-router.php";?>
  </article>
</main>

<?php require "./assets/includes/modules/footer.php";?>
