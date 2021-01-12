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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
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
                echo"<div style='text-align: center;' class='alert alert-success' role='alert'><p style='margin-bottom: 5px;'>Klant is succesvol verwijderd</p></div>";
            } else {
                echo"<div style='text-align: center;' class='alert alert-danger' role='alert'><p style='margin-bottom: 5px;'>Klant kon niet verwijderd worden</p></div>";
            }
            echo "<div class='container'><button style='margin-top: 20px; margin-bottom: 60px;' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='dbread.php'>Terug naar menu</a></button></div>";
        ?>
    </body>
</html>