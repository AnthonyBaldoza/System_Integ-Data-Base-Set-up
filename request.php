<?php
$url = "http://localhost/apitest/sender.php";
$json = file_get_contents($url);

$stndt = json_decode($json,true);

echo $stndt['S_id'];
echo $stndt['F_name'];
echo $stndt['gender'];

?>