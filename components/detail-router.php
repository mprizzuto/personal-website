detail-router.php
<?php 
$page = $_GET["experiment-detail"] ?? null;
	var_dump($page);

	switch ($page) {
		case "0":
		echo "it is cse 0";
		include "pages/poster-art.php";
		break;

		case "1":
		echo "it is cse 1";
		include "pages/poster-art.php";
		break;

		default:
		echo "something went wrong";
	}
?>