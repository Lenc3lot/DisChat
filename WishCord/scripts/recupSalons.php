<?php
session_start();
$_SESSION["usrnm"];
$file = "../data/user.json";
$data = json_decode(file_get_contents($file), true);
$c = 0;
$retourTab = [];
foreach ($data as $element) {
    if ($_SESSION["usrnm"] == $element["pseudo"]) {
        $nbServ = count($element["listeServ"]);
        while ($c <= $nbServ - 1) {
            // echo $element["listeServ"][$c];
            $retourTab[] = $element["listeServ"][$c];
            $c++;
        }
    }
    $c = 0;
}
$listedesserveurs = json_encode($retourTab);
echo $listedesserveurs;
?>