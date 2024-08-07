<?php 
  require_once "../src/functions.php";
  require_once "../src/components/set-theme.php";
?>

<!doctype html>
  <html lang="en" class="<?= $_COOKIE["mr-theme"] ?? null ?>">
 <?php include "head.php"; ?>
  <body class= "<?php echo getClassByQuery() . "-page" //. $_SESSION["theme"] ?? null; ?>"> 
    <header>
      <inner-column>
        <dev-info class="dev-info">
          <div class="dev-credential">
            <!-- <p class="dev-name">Marco Rizzuto</p> -->


            <div class="credentials">
              <div class="dev-badge">
                <p class="dev-name">Marco Rizzuto</p>
                <?php include "./assets/images/svgs/arrow.svg"; ?>
                <p class="job">Web Developer</p>
                
              </div>
              
            </div>

           <?php include "../src/components/nav.php";?>

           <?php include "../src/components/theme-changer.php"; ?>

          </div>
        </dev-info>
      </inner-column>
    </header>