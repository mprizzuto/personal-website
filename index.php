 <?php require "modules/header.php"?>
    <main class="<?=$queryString?>-main">
      <article class="dev-article">
        <?php 
        require "page-router.php";
        ?>
        <?=var_dump($_GET)?>
      </article>
    </main>
    <?php require "modules/footer.php";
