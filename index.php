<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    
    <meta charset="utf-8">

    <title>Marco Rizzuto- Web Designer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="I am a Web Designer who creates websites that help Health Professionals build and promote their personal brand. Unlike my competitors, I have experience with product beta-testing, and a passion for creating positive change in America's healthcare system.">

    <meta property="og:description" content="I am a Web Designer who creates websites that help Health Professionals build and promote their personal brand. Unlike my competitors, I have experience with product beta-testing, and a passion for creating positive change in America's healthcare system.">
    
    <meta property="og:title" content="Marco Rizzuto- Web Designer">

    <meta property="og:image" content="https://peprojects.dev/alpha-1/mprizzuto/images/marco-small.jpg">

    <meta property="og:type" content="website">

    <meta property="og:url" content="htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2">
  </head>
  <body class="homepage">  
    <?php include('header.php'); ?>

    <main class="dev-main">
      <article class="dev-article">
        <h1 class="heading-one" aria-hidden="true">marco rizzuto</h1>
        <section class="welcome">
          <inner-column>
            <div class="dev-credentials">
              <p class="lfps"><span class="greet">Hello!</span>My name is Marco Rizzuto. I bring a neurodiverse approach to web development  and User Experience.</p>

              <p>I am excited to take part in the current web revolution to build highly performant and accessible websites.</p>
            </div>

            <shapes>
              <?php include('lollypop.php'); ?>
              <svg class="chips-and-guac" width="100%" height="100%" viewBox="0 0 314 326" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                  <g transform="matrix(1,0,0,1,-406.991,-94.071)">
                      <circle cx="610" cy="310" r="110" style="fill:rgb(0,74,31);"/>
                      <g transform="matrix(-0.770271,0.637716,-1.12827,-1.36279,1161.96,214.188)">
                          <path d="M490,150L570,280L410,280L490,150Z" style="fill:rgb(219,25,0);fill-opacity:0.69;"/>
                      </g>
                  </g>
              </svg>
            </shapes>
          </inner-column>
        </section>

        <aside>
          <inner-column>
            <h2 class="heading-two">social</h2>

            <ul class="media-list">
              <li>
                <a class="link" href="https://twitter.com/marcorizzuto4" target="_blank">twitter</a>
              </li>
              <li>
                <a class="link" href="https://www.instagram.com/marcor.dev/" target="_blank">instagram</a>
              </li>
              <li id="email">
                 <a class="link" href="mailto:mprizzuto88@gmail.com" target="_blank">email me</a>
              </li>
            </ul>
          </inner-column>
        </aside>
      </article>
    </main>
  </body>
</html>