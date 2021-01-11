<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto | Update</title>
    <link rel="stylesheet" href="./public/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

    <h1> Update auto 3  </h1>
<p>autogegevens wijzigen in de tabel klant van de database garage </p>

<?php 
    //autogegevens uit het formulier halen.

    $autokenteken= $_POST["autokenteken"];
    $autotype= $_POST["autotype"];
    $automerk= $_POST["automerk"];
    $autokmstand= $_POST["autokmstand"];

     // connect met database
    require_once "connection.php";

    $sql = $conn->prepare(" update autogegevens set autokenteken  = :autokenteken, autotype = :autotype, automerk  = :automerk, autokmstand = :autokmstand where autokenteken = :autokenteken ") ;

    $sql->execute([ "autokenteken" => $autokenteken, "autotype" => $autotype, "automerk" => $automerk, "autokmstand" => $autokmstand]) ;

    echo "De auto is gewijzigd . <br/>";
    echo "<a href='dbreadauto.php'> Terug naar het menu. </a>";
    ?>


    <!-- Bootstrap scripts -->
    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>