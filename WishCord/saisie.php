<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./scripts/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./scripts/script.js"></script>
    <title>Acceuil</title>
</head>

<body>

    <header>

        <ul id="menu">
            <li><a href=#> Acceuil </a></li>
            <li><a href=#>Créer un compte</a></li>
        </ul>

    </header>

    <h1> Merci d'entrer un nom d'utilisateur et un message</h1>

    <input type="text" placeholder="Username" name="Username" id=Username>

    <textarea maxlength="120" name="Message" class="znsaisie" placeholder="Message" id=Message></textarea>

    <button name="Envoyer" onclick="EnvoyerMsg()">Envoyer le msg</button>

    <textarea id="ZnChat" class="znsaisie" readonly></textarea>
    
</body>

</html>