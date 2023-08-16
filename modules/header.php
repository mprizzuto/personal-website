 <?php
$currentTheme = $_POST["theme_changer"] ?? null;

$themeClass = '';

// $isThemeCookieSet = $_COOKIE["theme"] ?? null;
$themeCookie = setcookie("theme", $currentTheme, time() + 3600);

// if ( $_SERVER['REQUEST_METHOD']) {
//   echo "posted!" . var_dump($_POST). count($_POST) .;
// }

// var_dump($_SERVER["REQUEST_METHOD"])
// if (!empty($_COOKIE["theme"])) {
//   if ($_COOKIE["theme"] == 'dark') {
//     $themeClass = "dark-theme";
//   } else if ($_COOKIE["theme"] == "light") {
//     $themeClass = "light-theme";
//   }  
// }
// if (in_array(needle, $_POST))
var_dump($_COOKIE);
?>

 <?php 
  require_once "functions.php";

  // formatVar($_COOKIE["theme"]);
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