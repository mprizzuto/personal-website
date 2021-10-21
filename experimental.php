<!DOCTYPE html>
	<html lang="en" >
	<head>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    
    <meta charset="utf-8">

    <title>Marco Rizzuto- Web Designer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="A Web Designer's experimental page. Welcome to my lab!">

    <meta property="og:description" content="A Web Designer's experimental page. Welcome to my lab!">
    
    <meta property="og:title" content="Marco Rizzuto- Web Designer">

    <meta property="og:image" content="https://peprojects.dev/alpha-1/mprizzuto/images/brenda.png">

    <meta property="og:type" content="website">

    <meta property="og:url" content="htps://peprojects.dev/alpha-1/mprizzuto/images/sun.jpg">
	</head>
	<body class="experimental-body">
    <?php include('header.php');?>
    <main class="designer-experiments">
      <article class="web-experimental">
        <section class="visual-design">
          <inner-column>
            <h1 class="design-title">web</h1>
            <?php 
            include 'project-info.php';
            include 'functions.php';
            ?>

            <?php 
            cardBuilder('physician business card', 'a website for a doctor', 'https://peprojects.dev/alpha-1/mprizzuto/portfolio/physician-bc/');
            cardBuilder('medical scrub company', 'plant-based medical scrubs', 'https://google.com');
            cardBuilder('tourette symptom checker', 'a project that demonstrates form handling. Using PHP', 'https://google.com');
            cardBuilder('dermatology practice', 'a website for a modern Dermatologist', 'https://codepen.io/MPRizzuto/pen/dyNwOWJ');
            cardBuilder('student form', 'a study that uses PHP and sql.', 'https://google.com');
            ?>

            <h2>design</h2>
            <h2 class="experiments-title"><span>experi</span><span class="ments">ments</span></h2>

            
          </inner-column>
        </section>
      </article>
    </main>
  </body>
</html>	