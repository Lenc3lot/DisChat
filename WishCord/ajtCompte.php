<?php
$listuser = "./data/user.json";
$a = "oS5_z!e*eD";
$data = json_decode(file_get_contents($listuser),true);
$usrn = $_POST["username"];
$pswd = $_POST["pswd"];
$test = true;
foreach ($data as $element) {
    if($element["pseudo"] == $usrn ){
        echo $element["pseudo"] . " -- ". $usrn;
        $test = false;
        echo $test;
        break;
    }
}

if($test == true){
    $newUser["pseudo"] = $usrn;
    $newUser["mdp"] = hash("sha256",$a.$pswd);
    $newUser["listeServ"] ="";
    $data[]=$newUser;
}else{
    echo "pseudo existant";
}


file_put_contents($listuser,json_encode($data));