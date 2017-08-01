
<?php
include_once 'Data.php';
$db = new Data();
$message = htmlspecialchars($_POST['message']);
$pseudo = htmlspecialchars($_POST['pseudo']);

$db->SendToData($message , $pseudo);






if (empty($_POST['message'])) {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}
$Ajax =  $_POST['message'];


