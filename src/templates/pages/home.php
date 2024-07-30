<?php 
$timezone = date_default_timezone_set("America/New_York");

$time = date("H");

$planetaryBody = "sun";

if ( $time >= 16 || $time <= 07 ) {
  $planetaryBody = "moon";
}

?>
<section class="welcome">
  <inner-column>
    <h2 class="heading-two">and welcome</h2>
    
    <div class="dev-credentials">

      <p class="lfps">
        <strong>My name is <span class="dev-name-lfps">Marco Rizzuto.</span></strong> I bring a neurodiverse approach to <span class="job-role">web development</span> and <span class="job-role">User Experience.</span></p>

      <p>I am excited to take part in the current web revolution to build highly performant and accessible websites.</p>

      <p>To see my projects, click the <?=$planetaryBody?>. To contact me, <a href="?page=contact">read my contact page first</a></p>

      <p>not sure where to start? check out the <a href="?page=site-map">sitemap</a></p>
    </div>

    <celestial-shapes>
      <?php include "../src/routers/day-night-router.php";?>
    </celestial-shapes>
  </inner-column>
</section>