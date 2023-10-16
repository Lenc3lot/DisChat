<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Connexion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./scripts/style.css'>
</head>
<body>
    <h1>Page De Connexion</h1>
<form name="connex" action="./connexionScript.php" method="post">
        <input type ="text" name="username" placeholder="Username">
        <input type ="password" name="pswd" placeholder="Password">
        <input type="submit">
    </form>

    <?php 

    //GESTION DES ERREURS//
    
    if(isset($_GET["CodeErr"])){
        switch ($_GET["CodeErr"]) {
            case '1':
                echo "<br> <h2> UTILISATEUR OU MDP INCORRECT ! <h2>";
                break;
            
            case '2':
                echo "<br> <h2> VOUS AVEZ ETE DECONNECTES ! <h2>";
                break;
        }
       
    }


    ?>
</body>
</html>