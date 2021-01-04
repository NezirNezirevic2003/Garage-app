<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>gar-delete-auto3.php</title>  
    </head>
    <body>
        <h1>garage delete auto 3</h1>
        <p>
           Op autokenteken gegevens zoeken uit de 
           tabel auto van de database garage 
           zodat ze verwijderd kunnen worden.
        </p>
        <?php
            // gegevens uit het formulier halen
            $autokenteken = $_POST["autokenteken"];
            $verwijderen = $_POST["verwijder"];

            // autogegevens verwijderen
            if($verwijderen)
            {
                require_once "connection.php";

                $sql = $conn->prepare("
                                        delete from autogegevens
                                        where autokenteken = :autokenteken");
                $sql->execute(["autokenteken" => $autokenteken]);

                echo "De gegevens zijn verwijderd. <br />";
            }
            else
            {
                echo "De gegevens zijn niet verwijderd. <br />";
            }

            echo "<a href='../dbread-auto.php'> Trug naar het menu. </a>";
        ?>
    </body>
</html>