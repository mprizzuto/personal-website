 <?php
// session_start();

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
// // echo "POST REQUEST MADE!!@!@#!$%^@&*&@^%@^&*@&"; 
//   $inputData = json_decode(file_get_contents("php://input"), true);

//   if ( $inputData && isset( $inputData["theme"]) ) {
//     $_SESSION["theme"] = $inputData["theme"];
    
//     $response = array(
//       "message" => "Theme updated successfully",
//       // "theme" =>  var_dump($inputData),
//     );
    
//     header("Content-Type: application/json");
    
//   }
//   else {
//     header("HTTP/1.1 400 Bad Request");
//   }
// }
// ?>

<?php 
  require_once "./includes/functions.php";

?>


<!doctype html>
  <html lang="en">
  
 <?php include "head.php"; ?>


  <body class= "<?php echo getClassByQuery() . "-page " //. $_SESSION["theme"] ?? null; ?>"> 
    <header>
      <inner-column>
        <dev-info class="dev-info">
          <div class="dev-credential">
            <p class="heading-one">Marco Rizzuto</p>

            <div class="credentials">
              <?php include "images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
              
            </div>

           <?php include "./includes/components/nav.php";?>

           <?php include "./includes/components/theme-changer.php"; ?>
          </div>
        </dev-info>
      </inner-column>
    </header>