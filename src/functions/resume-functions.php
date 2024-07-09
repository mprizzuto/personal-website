<?php 
// generates skill list for homepage
function generateSkills(array $skills) {
	foreach ($skills as $key => $value) 
		echo "<li>" . "<span class='language'>$key</span> " . $value . "</li>";
	}
?>

<?php function generateResume(iterable $resumeData) { ?>
	<?="<ul class='resume-list'>"?>
		<?php foreach ($resumeData as $data): ?>
		  <?php foreach ($data as $category => $items): ?>
		    <?php echo "<li>" . "<h2>" . $category . "</h2>" . "</li>" .  "<li>" . "<ul>"; ?>

		    <?php foreach ($items as $item => $value): ?>
		      <?php echo "<li> " . $value . "</li>"?>
		    <?php endforeach; ?>
		    <?="</ul> </li>"?>
		  <?php endforeach; ?>
		<?php endforeach; ?>

	<?="</ul>"?>
<?php }?>
