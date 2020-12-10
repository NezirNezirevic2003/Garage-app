<?php
    ### Connectie variabelen voor db
    $user = "root";  
    $password = '';  
    $db_name = "test";  
    
    ### Connectie maken met de database
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Gefaald om verbinding te maken met database: ". mysqli_connect_error());  
    }

    ### Connectie is gelukt
    echo "<h1><center>Verbinding met database gelukt</center></h1>";
?>

