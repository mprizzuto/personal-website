experiment-details-card.php
<?php include "experiment-details-list.php";?>
<?php foreach($experimentalDetailsList as $detail) :?>
<experiment-details-card>
	<h3><?=$detail[0]["title"]?></h3>
</experiment-details-card>
<?php endforeach; ?>