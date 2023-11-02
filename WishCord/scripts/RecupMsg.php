<?php 
$file = "../Msg.txt";
$chatserialise = unserialize(file_get_contents($file));
$chat = json_encode($chatserialise);
echo $chat;
?>