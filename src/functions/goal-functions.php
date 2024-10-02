<?php function generateGoals(iterable $goalData) {?>
<h2><?=$goalData["heading"]?></h2>

	<ul class="goal-list-parent">
   
    <?php foreach($goalData["sections"] as $data) {?>
        <li>
          <h2><?=$data["heading"]?></h2>

          <ul class="goal-list-child">
            <?php foreach ($data["goals"] as $goal) {?>
            <li><?=$goal["text"] ?? $goal["other"]?></li>
            <?php //formatVar($goal["text"] ?? $goal["other"])?>
          <?php }?>
          </ul>
        </li>
        
     <?php }?> 
  </ul>
<?php }?>