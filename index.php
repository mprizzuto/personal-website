 <?php require "modules/header.php"?>
    <main class="<?=$queryString?>-main">
      <article class="dev-article">
        <?php 
        require "page-router.php";
        // echo $_SERVER['SCRIPT_FILENAME'] === "index.php" ? true: false;
        // var_dump(getPage());
        ?>
      </article>
    </main>
    <?php require "modules/footer.php";
