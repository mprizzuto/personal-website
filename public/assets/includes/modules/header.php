<?php 
  require_once "functions.php";
  // require_once "./assets/includes/components/set-theme.php";
?>


<!doctype html>
  <html lang="en">
  
 <?php include "head.php"; ?>


  <body class= "<?php echo getClassByQuery() . "-page" //. $_SESSION["theme"] ?? null; ?>"> 
    <header>
      <inner-column>
        <dev-info class="dev-info">
          <div class="dev-credential">
            <p class="heading-one">Marco Rizzuto</p>

            <div class="credentials">
              <?php include "./assets/images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
            </div>

           <?php include "./assets/includes/components/nav.php";?>

           <?php include "./assets/includes/components/theme-changer.php"; ?>
          </div>
        </dev-info>
      </inner-column>
    </header>