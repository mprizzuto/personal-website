<?php 
$timezone = date_default_timezone_set("America/New_York");
$planetaryBody = "sun";
$time = date("H");
// $timeChange = 18;
// var_dump($time);

if ($time >= 16 || $time <= 07) {
  $planetaryBody = "moon";
}

?>
    <section class="welcome">
      <inner-column>
        <h2 class="heading-two">Hello!</h2>
        <div class="dev-credentials">

          <p class="lfps">
            <!-- <span class="greet">Hello!</span> --> 
            <strong>My name is Marco Rizzuto.</strong> I bring a neurodiverse approach to web development  and User Experience.</p>

          <p>I am excited to take part in the current web revolution to build highly performant and accessible websites.</p>

          <p>To see my projects, click the <?=$planetaryBody?>. To contact me, click <a href="mailto:mprizzuto88@gmail.com" target="_external">here</a></p>
        </div>

        <shapes>
          <?php include "day-night-router.php";?>
        </shapes>
      </inner-column>
    </section>