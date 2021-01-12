<?php
require 'connection.php';
?>
<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>Klant | Delete</title>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/style.scss">
    </head>
    <body>
        <!-- Navigatie menu -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/auto.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
                <a href="dbinsertAuto.php" class="nav-item nav-link">Create</a>
                <a href="dbreadauto.php" class="nav-item nav-link">Read</a>
                <a href="update-auto1.php" class="nav-item nav-link">Update</a>
                <a href="delete-auto1.php" class="nav-item nav-link">Delete</a>
                <a href="login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>