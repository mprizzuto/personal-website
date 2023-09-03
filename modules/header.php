 <?php

session_start();

$themeClass = ($_SESSION['theme'] ?? null === 'dark') ? 'dark-theme' : '';

?>

<?php 
  require_once "functions.php";
?>

<?=formatVar($_SESSION)?>

<!doctype html>

  <html lang="en">
  
  <head>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">

    <link rel="stylesheet" href="dark-theme.css" class="<?php echo $themeClass; ?>">


    <meta charset="utf-8">
    <?=getHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body class= "<?php echo getClassByQuery() . '-page ' . $themeClass; ?>"> 
    <header class="author-welcome">
      <inner-column>
        <dev-info class="dev-info">
          <div class="dev-credential">
            <p class="heading-one">Marco Rizzuto</p>

            <div class="credentials">
              <?php include "images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
              
            </div>

           <?php include "components/nav.php";?>

           <?php include "components/theme-changer.php"; ?>
          </div>
        </dev-info>
      </inner-column>
    </header>