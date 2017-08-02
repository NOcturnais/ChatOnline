<?php
header('Content-Type: text/plain');
include_once 'Data.php';

$db = new Data();
 
$transit = $db->ExitToData();

echo $transit;

?>