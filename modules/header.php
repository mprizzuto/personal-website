 <?php

$currentTheme = $_POST["theme_changer"] ?? null;

$themeClass = ($_COOKIE["theme"] ?? null) === "night theme" ? "dark-mode": "";

if ($currentTheme) {
  if ($currentTheme === "night theme") {
    $themeClass = "dark-mode";
    $themeCookie = setcookie("theme", $currentTheme, time() + 3600);
    echo "NIGHT THEME";
  }
  elseif ($currentTheme === "day theme") {
    $themeCookie = setcookie("theme", $currentTheme, time() + 3600);
    $themeClass = "";
    echo "DAY THEME";
  }
}

?>

<?php 
  require_once "functions.php";
?>


<!doctype html>

  <html lang="en">
  
  <head>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">

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