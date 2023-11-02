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

<body onload="GetChanUser()">
    <header>
    <?php 
        session_start();
        
    ?>
    <ul id="menu" style="color:black">
        <li><a href=#> Acceuil </a></li>
        <?php if(!isset($_SESSION["usrnm"])){ ?>
            <li><a href=#>Créer un compte</a></li> 
            <li><a href="./connexionPage.php">Se Connecter</a></li>
            <?php } else { ?>
        <li><a href="./scripts/killCookie.php">Déconnexion</a><li><?php } ?>
       
    </ul>
    </header>

    <?php 
    if(isset($_SESSION["usrnm"])){
        echo "<h1> Bonjour ". $_SESSION["usrnm"] ."</h1>";
    ?>

    <ul id="listeChan"> LISTE DES SALONS
    
   <!-- Afficher les salons de l'utilisateur ICI -->
    
    <li onclick="AskChan()"> Rejoindre un salon </li>
    </ul> 

    <?php }else{
        header("Location: ./connexionPage.php?CodeErr=2");
    } ?>
    
</body>
</html>