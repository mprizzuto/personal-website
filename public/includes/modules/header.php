<?php 
  require_once "./includes/functions.php";

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
              <?php include "images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
            </div>

            <?php 
              // if ($_SERVER["REQUEST_METHOD"] === "POST") {
              //   echo "POSTED";
              // }

              // else {
              //   echo "NOT POSTED";

              //   var_dump($_SERVER["REQUEST_METHOD"]);
              // }

            ?>

           <?php include "./includes/components/nav.php";?>

           <?php include "./includes/components/theme-changer.php"; ?>
          </div>
        </dev-info>
      </inner-column>
    </header>