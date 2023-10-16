<?php
    $usrnSaisi = $_POST["username"];
    $pswSaisi = $_POST["pswd"];
    $listuser = "./data/user.json";
    $a = "oS5_z!e*eD";
    $data = json_decode(file_get_contents($listuser),true);

    

    foreach($data as $element){
        if($element["pseudo"] == $usrnSaisi && $element["mdp"] == hash("sha256",$a.$pswSaisi)){
            $header = [
                'alg' => "HS256",
                'typ' => "JWT"
            ];
            $payload = [
                'pseudo' => 
            ]
            setcookie("usrnm",$usrnSaisi);
            header("Location: ./choixSalon.php");
        }
    }
?>