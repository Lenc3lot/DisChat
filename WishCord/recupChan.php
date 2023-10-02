<?php 
$listserv = "./salons/salons.json";
$data = file_get_contents($listserv);
//$datas = json_decode($data,true);
echo $data;
// foreach ($datas as $element) {
//     echo $element["nom"];
//     echo $element["chemin"];
// }
?>