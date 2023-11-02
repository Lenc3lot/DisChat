<?php
session_start();
$usrnSaisi = $_POST["username"];
$pswSaisi = $_POST["pswd"];

$listuser = "../data/user.json";
$a = "oS5_z!e*eD";
$data = json_decode(file_get_contents($listuser), true);
$secret = "LePHPCestPasSiMalEnVrai!";

// FONCTIONS BASE64URL POUR JWT //
function base64url_encode($data)
{
    $b64 = base64_encode($data);
    if ($b64 === false) {
        return false;
    }
    $url = strtr($b64, '+/', '-_');
    return rtrim($url, '=');
}

function base64url_decode($data, $strict = false)
{
    $b64 = strtr($data, '-_', '+/');
    return base64_decode($b64, $strict);
}

$test = false;

foreach ($data as $element) {

    if ($element["pseudo"] == $usrnSaisi && $element["mdp"] == hash("sha256", $a . $pswSaisi)) {
        echo $usrnSaisi ." ===== ". $element["pseudo"];
   
        $_SESSION["usrnm"] = $usrnSaisi;


        echo " --------- " . $_SESSION["usrnm"];
       // header("Location: ../choixSalon.php");
        $test = true;
        return $test;
    } else {
        header("Location: ../connexionPage.php?CodeErr=1");
    }
}

if($test){
    header("Location: ../choixSalon.php");
}
?>