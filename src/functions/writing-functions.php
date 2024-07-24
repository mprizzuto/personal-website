<?php
function getWritingPage() {
	$page = $_GET["writing"] ?? null;
	return $page;
}

function getWritingData() {
	require "../src/database/writing-data.php";

	return $writingList;
}
?>