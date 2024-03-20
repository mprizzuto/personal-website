<?php include "database/site-map-data.php"; ?>

<section class="typography">
	<inner-column>
		<!-- <header class="page-header">
			<inner-column>
			</inner-column>
		</header> -->
		<h2 class="heading-two">type faces</h2>

		<p class="noto-font font-flag">noto serif</p>
		
		<letters class="upper-case noto-font">
			abcdefghijklmnopqrstuvwxyz
			!@#$%^&*()_+=<{}> 
		</letters>

		<letters class="lower-case noto-font">
			abcdefghijklmnopqrstuvwxyz
			!@#$%^&*()_+=<{}> 
		</letters>

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
			<li></li>
			<li></li>
			<!-- <li></li> -->
			<li></li>
		</ul>
	</inner-column>
</section>

<section class="shapes">
	<inner-column>
		<h2 class="heading-two">shapes</h2>

		<figure class="day-shape">
			<?php include "images/svgs/sun.php"; ?>
			
			<figcaption>day shape</figcaption>
		</figure>

		<figure class="night-shape">
			<?php include "images/svgs/moon.php"; ?>
			<figcaption>night shape</figcaption>
		</figure>

		<figure class="arrow-shape">
			<?php include "images/svgs/arrow.svg"; ?>
			<figcaption>arrow shape</figcaption>
		</figure>

		<figure class="quotes-shape">
			<?php include "images/svgs/left-quote.svg"; ?>

			<?php include "images/svgs/right-quote.svg"; ?>
			<figcaption>quotes shape</figcaption>
		</figure>

		<figure class="experimental-shape">
			<?php include "images/svgs/experimental.svg"; ?>

			<figcaption>experimental shape</figcaption>
		</figure>
	</inner-column>
</section>

<section class="site-map">
	<inner-column>
		<h2 class="heading-two">site map</h2>

		<?=formatSitemap($siteData)?>
	</inner-column>
</section>