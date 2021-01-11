<?php
require 'connection.php';
?>
<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>Klant | Delete</title>  
        <link rel="stylesheet" href="./public/style.scss">
    </head>
    <body>
        <h1>garage delete klant 3</h1>
        <?php
            // gegevens uit het formulier halen
            $klantid = $_POST["klantidvak"];
            $klanten = $conn->prepare('SELECT klantid FROM autogegevens WHERE klantid = :klantid');
            $klanten->execute(["klantid" => $klantid]);
            // alle data pakken.
            $waarde = $klanten->fetchAll();

            //checken of klant id bestaat in de tabel autogegevens. Als het niet bestaat verwijder het als het wel bestaat verwijderen we het niet.
            if(!$waarde) {
                $klanten = $conn->prepare('DELETE FROM klantgegevens WHERE klantid = :klantid');
                $klanten->execute(["klantid" => $klantid]);
                echo "Klant is verwijderd.";
            } else {
                echo "Kan niet verwijder worden omdat u een auto heeft.";
            }
            echo "<a href='dbread.php'> Terug naar het menu. </a>";
        ?>
    </body>
</html>