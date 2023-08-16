<form id="theme-changer-form" method="POST">
	<label for="day-theme">day theme</label>
	<input id="day-theme" type="radio" name="theme changer" value="day theme">

	<label for="night-theme">night theme</label>
	<input id="night-theme" type="radio" name="theme changer" value="night theme">

	<button type="submit">change theme</button>
</form>
<?php //TODO: only show one option at a time by checking the cookie status. maybe include an OS default theme (like MDN) the default should be day theme.  ?>
<?=var_dump($_POST)?>

<?php

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

// Set the expiration date to one hour ago

?>
