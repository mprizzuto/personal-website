<?php
// get fJSON file, decode it, loop it
$nowDataJSON = file_get_contents("../src/database/now-data.json");
$nowDataDcoded = json_decode($nowDataJSON, true);
formatVar($nowDataDcoded);
?>