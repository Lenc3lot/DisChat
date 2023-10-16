<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Choix Salon</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="./scripts/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='./scripts/test.js'></script>
</head>

<body>
    <header>
    <?php 
        if(isset($_COOKIE["usrnm"])){
            echo "<h1> Bonjour ".$_COOKIE["usrnm"]."</h1>";
        }
    ?>
    <ul id="menu">
        <li><a href=#> Acceuil </a></li>
        <li><a href=#>Créer un compte</a></li>
    </ul>
    </header>

    <ul id="listeChan"> LISTE DES SALONS
    
    <?php 
    $listserv = "./salons/salons.json";
    $data = file_get_contents($listserv);
    $datas = json_decode($data,true);
    foreach ($datas as $element) {
        echo "<li> <a href = '".$element["chemin"]."'>".$element["nom"]."</a> </li>";
    }   
    ?>
    <li onclick="AskChan()"> Rejoindre un salon </li>
    </ul> 

    
</body>
</html>