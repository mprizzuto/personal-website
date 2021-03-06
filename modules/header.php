
<!doctype html>

<html lang="en">
 <?php 
require_once "functions.php";
?>
<head>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    
    <meta charset="utf-8">
    <?=getHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="homepage"> 
    <header class="author-welcome">
      <inner-column>
        <div class="dev-info">
          <section class="nav">
            <h1 class="heading-one">Marco Rizzuto</h1>

            <div class="credentials">
              <?php include "images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
              
            </div>

           <nav class="site-menu">
            <a class="link" href="?page=home">home</a>
            <a class="link" href="?page=projects">projects</a>
            <a class="link" href="?page=about">about</a>
            <a class="link" href="?page=writing">writing</a>  <?php if($_GET["page"]?? null === "about"): ?>
                <a href="?page=goals">goals</a> 
                <a href="?page=resume">resume</a>
              <?php endif; ?>
           </nav>
          </section>
        </div>
      </inner-column>
    </header>