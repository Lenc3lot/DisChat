<?php 

    if (isset($_COOKIE['usrnm'])) {
        unset($_COOKIE['usrnm']); 
        setcookie('usrnm',"", -1); 
        header("Location: ../choixSalon.php");
        echo "test";
        return true;
    } else {
        header("Location: ../choixSalon.php");
        
        return false;
    }   
?>