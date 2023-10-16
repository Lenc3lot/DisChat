<?php
$chanName = $_POST["chanName"];
$RelativeLink = "./salons/".$chanName.".txt";
$listserv = "./salons/salons.json";
$data = json_decode(file_get_contents($listserv),true);

if(!file_exists($RelativeLink)){
    echo"Existe pas";
}else{
    echo"Existe";
};

if (!file_exists("./salons")) {
    mkdir("./salons");
}

if (!file_exists($RelativeLink)) {
    file_put_contents($RelativeLink, "");
    $infos["chemin"] = $RelativeLink;
    $infos["nom"] = $chanName;
    $data[]= $infos;
    file_put_contents($listserv,json_encode($data));
}
?>