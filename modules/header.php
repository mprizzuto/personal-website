 <?php
session_start();

// var_dump($_SESSION['theme']);
// $inputData = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $inputData = json_decode(file_get_contents("php://input"), true);

  if ($inputData && isset( $inputData["theme"]) ) {
    
    $_SESSION["theme"] = $inputData["theme"];
    
    $response = array(
      "message" => "Theme updated successfully",
      // "theme" =>  var_dump($inputData),
    );
    
    header("Content-Type: application/json");
    
  }
  else {
    header("HTTP/1.1 400 Bad Request");
  }
}
?>

<?php 
  require_once "functions.php";
?>



<!doctype html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    
    <?=getHead()?>
  </head>

  <body class= "<?php echo getClassByQuery() . "-page " . $_SESSION["theme"] ?? null; ?>"> 
    <header>
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