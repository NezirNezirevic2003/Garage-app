<html lang="nl">
<head>
    <meta name="author" content="anjo eijeriks">
    <meta charset="utf-8">
    <title>gar-update-klant2.php</title>
    <link rel="stylesheet" href="./public/style.css">

</head>
<body>
    <h1>garage update klant 2</h1>
    <p>
        dit formulier wordt gebruikt om klantgegevens te wijzigen
        in de tabel klant van de database garage 
    </p>
    <?php
    include 'connection.php';
      $klantid = $_POST["klantidvak"] ;
      require_once "connection.php" ;
 
      $klanten = $conn->prepare("
                                select klantid,
                                       klantnaam,
                                       klantadres,
                                       klantpostcode,
                                       klantplaats
                                from   klantgegevens
                                where  klantid = :klantid
                                ") ;
      $klanten->execute(["klantid" => $klantid]);
 
      echo "<form action ='./dbupdate3.php' method='post'>";
      foreach ($klanten as $klant)
                {
                    echo " klantid:" . $klant ["klantid"];
                    echo " <input type='hidden' name='klantid' ";
                    echo " value=' " . $klant ["klantid"] . " '> <br /> ";
 
                    echo " klantnaam: <input type='text' ";
                    echo " name = 'klantnaam' ";
                    echo " value = ' " .$klant ["klantnaam"]. "' ";
                    echo " > <br />";
 
                    echo " klantadres: <input type='text' ";
                    echo " name = 'klantadres' ";
                    echo " value = ' " .$klant ["klantadres"]. "' ";
                    echo " > <br />";
 
                    echo " klantpostcode: <input type='text' ";
                    echo " name = 'klantpostcode' ";
                    echo " value = ' " .$klant ["klantpostcode"]. "' ";
                    echo " > <br />";
 
                    echo " klantplaats: <input type='text' ";
                    echo " name = 'klantplaats' ";
                    echo " value = ' " .$klant ["klantplaats"]. "' ";
                    echo " > <br />";
                }
                echo "<input type='submit'>";
            echo "</form>";
            
    ?>
</body>
</html>