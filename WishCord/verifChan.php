<?php

$chanName = $_POST["chanName"];
// $chanName = "test1";
$user = $_COOKIE["usrnm"];
$RelativeLink = "./salons/" . $chanName . ".txt";
$listserv = "./salons/salons.json";
$data = json_decode(file_get_contents($listserv), true);

$listuser = "./data/user.json";
$dataUser = json_decode(file_get_contents($listuser), true);
$test = true;

// if (!file_exists($RelativeLink)) {
//     echo "Existe pas";
//     // echo"<br> Liste des chans : ";
//     foreach ($dataUser as $element) {

//         if ($element["pseudo"] == $user) {

//             foreach ($element["listeServ"] as $listedesserveurs) {
//                 echo $listedesserveurs;
//             }

//             // for ($i=0; $i < count($listservusers) ; $i++) { 
//             //     if($listservusers[$i] == $chanName){
//             //         //Script pour connexion au chan
//             //     }else{
//             //         $listservusers[] = $chanName;
//             //     }
//             // }

//             $test = false;
//             echo $test;
//             break;
//         }
//     }
// } else {
//     echo "Existe";
//     foreach ($dataUser as $element) {
//         if ($element["pseudo"] == $user) {
//             echo $element["listeServ"];
//             $test = false;
//             echo $test;
//             break;
//         }
//     }
// }

if (!file_exists("./salons")) {
    mkdir("./salons");
}

if (!file_exists($RelativeLink)) {

    file_put_contents($RelativeLink, "");
    $infos["chemin"] = $RelativeLink;
    $infos["nom"] = $chanName;
    $data[] = $infos;
    file_put_contents($listserv, json_encode($data));

    $test = true;

    foreach ($dataUser as $element) {
        if ($element["pseudo"] == $user) {
            echo $element["listeServ"];
            $test = false;
            echo $test;
            break;
        }
    }
} else {
    echo "Existe";
    foreach ($dataUser as $element) {
        if ($element["pseudo"] == $user) {
            echo $element["listeServ"];
            $test = false;
            echo $test;
            break;
        }
    }
}
