<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>gar-delete-klant3.php</title>  
<<<<<<< HEAD
    </head>
    <body>
        <h1>garage delete klant 3</h1>
        <p>
           Op klantid gegevens zoeken uit de 
           tabel klanten van de database garage 
           zodat ze verwijderd kunnen worden.
        </p>
=======
        <link rel="stylesheet" href="./public/style.css">
    </head>
    <body>
        <h1>garage delete klant 3</h1>
>>>>>>> f7fdd97248f0a7efa8c3ce8ebb264d314fd73ad1
        <?php
            // gegevens uit het formulier halen -------
            $klantid = $_POST["klantidvak"];
            $verwijderen = $_POST["verwijdervak"];
 
            // klantgegevens verwijderen ------------
            if($verwijderen)
            {
                require_once "connection.php";
 
                $sql = $conn->prepare("
                                        delete from klantgegevens
                                        where klantid = :klantid");
                $sql->execute(["klantid" => $klantid]);
 
<<<<<<< HEAD
                echo "De gegevens zijn verwijderd. <br />";
=======
                echo "<p>De gegevens zijn verwijderd. <br /></p>";
>>>>>>> f7fdd97248f0a7efa8c3ce8ebb264d314fd73ad1
            }
            else
            {
                echo "De gegevens zijn niet verwijderd. <br />";
            }
 
<<<<<<< HEAD
            echo "<a href='./klant.html'> Trug naar het menu. </a>";
=======
            echo "<a href='./dbread.php'> Trug naar het menu. </a>";
>>>>>>> f7fdd97248f0a7efa8c3ce8ebb264d314fd73ad1
        ?>
    </body>
</html>