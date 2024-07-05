<?php function generateGoals(iterable $goalData) {?>
	<ul class="goal-list">
  <?php
  	foreach($goalData as $data) {
			foreach($data as $key => $values) {
		    echo "<li>" . "<h2>$key</h2>";
			  
	      foreach((array)$values as $value) {
	        // remove the square brackets from the string
	        echo str_replace(array('[',']'), "", $value ). " ";
	      }
		  }
		    echo "</li>";
		}
   ?>
  </ul>
<?php }?>