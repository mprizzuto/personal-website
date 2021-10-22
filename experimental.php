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
    <?php include('header.php');
    include 'experiment-info.php';
    ?>
    <main class="designer-experiments">
      <article class="web-experimental">
        <section class="visual-design">
          <inner-column>
            <h1 class="design-title">web</h1>

            <?php foreach($experimentList as $experiment): ?>
              <card class="project-card">
                <details open>
                  <summary><?=$experiment["name"]?></summary>
                  <p><?=$experiment["purpose"]?></p>
                  <a href="<?=$experiment["link"]?>" target="_blank"><?=$experiment["name"]?></a>
                </details>
              </card>
             <?php endforeach; ?> 

            <h2>design</h2>
            <h2 class="experiments-title"><span>experi</span><span class="ments">ments</span></h2>
            
          </inner-column>
        </section>
      </article>
    </main>
  </body>
</html>	