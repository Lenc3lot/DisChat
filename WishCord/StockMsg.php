<?php
//Récup du msg envoyé et 
$Username = $_POST["Username"];

$Message = $_POST["Message"];

// echo serialize($Message);

$file = "./Msg.txt";


$time = time();
$heure = date("Y-m-d H:i:s");

$msgRecup = array();
$msgRecup["Heure"] = $heure;
$msgRecup["Message"] = $Message;
$msgRecup["Pseudo"] = $Username;


$MsgFile = unserialize(file_get_contents($file));

$MsgFile[] = $msgRecup;

file_put_contents($file,serialize($MsgFile));

//header('location: ./saisie.php');
?>