<?php include "../src/database/site-map-data.php"; ?>

<section class="typography">
	<inner-column>
		<header class="page-header">
			<h2>website goal(s)</h2>

			<p>a highly performant and accessible website in the style of bauhaus/swiss poster art.</p>
		</header>
		<h2 class="heading-two">type faces</h2>

		<p class="zen-kaku-font font-flag">zen kaku</p>

		<letters class="upper-case zen-kaku-font">
			abcdefghijklmnopqrstuvwxyz
			!@#$%^&*()_+=<{}> 
		</letters>

		<letters class="lower-case zen-kaku-font">
			abcdefghijklmnopqrstuvwxyz
			!@#$%^&*()_+=<{}> 
		</letters>

	</inner-column>
</section>

<section class="colors">
	<inner-column>
		<h2 class="heading-two">colors</h2>

		<ul class="color-list">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<!-- <li></li> -->
		</ul>
	</inner-column>
</section>

<section class="shapes">
	<inner-column>
		<h2 class="heading-two">shapes</h2>

		<figure class="day-shape">
			<?php include "./assets/images/svgs/sun.php"; ?>
			
			<figcaption>day shape</figcaption>
		</figure>

		<figure class="night-shape">
			<?php include "./assets/images/svgs/moon.php"; ?>
			<figcaption>night shape</figcaption>
		</figure>

		<figure class="arrow-shape">
			<?php include "./assets/images/svgs/arrow.svg"; ?>
			<figcaption>arrow shape</figcaption>
		</figure>

		<figure class="quotes-shape">
			<?php include "./assets/images/svgs/left-quote.svg"; ?>

			<?php include "./assets/images/svgs/right-quote.svg"; ?>
			<figcaption>quotes shape</figcaption>
		</figure>

		<figure class="experimental-shape">
			<?php include "./assets/images/svgs/experimental.svg"; ?>

			<figcaption>experimental shape</figcaption>
		</figure>
	</inner-column>
</section>

<section class="site-map">
	<inner-column>
		<h2 class="heading-two">site map</h2>
		<?php include "../src/templates/pages/site-map.php"; ?>
	</inner-column>
</section>