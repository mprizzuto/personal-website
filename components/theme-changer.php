<!-- <form id="theme-changer-form" method="POST">
	<label for="day-theme">day theme</label>
	<input id="day-theme" type="radio" name="theme changer" value="day-theme">

	<label for="night-theme">night theme</label>
	<input id="night-theme" type="radio" name="theme changer" value="night-theme">

	<button type="submit">change theme</button>
</form> -->
<?php

formatVar($_POST);



?>

<button id="toggle-themes"><span id="current-theme"></span> theme</button>
<ul class="theme-list">
  <li>
    <button id="os-theme">os theme</button>
  </li>
  
  <li>
    <button id="light-theme">light theme</button>
  </li>
  
  <li>
    <button id="dark-theme">dark theme</button>
  </li>
</ul>