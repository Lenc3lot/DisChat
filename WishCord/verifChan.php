<?php
$chanName = $_GET["chanName"];
$RelativeLink = "./salons/".$chanName.".txt";
if(!file_exists($RelativeLink)){
    echo"Gauvre au sucre ";
}else{
    echo"LetsGo RamenGo  ";
};


if (!file_exists("./data")) {
    mkdir("./data");
    if (!file_exists("./data/donnees.txt")) {
        file_put_contents("./data/donnees.txt", "");
    }
}



?>