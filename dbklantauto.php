<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>Klanten lijst</title>
    <link rel="stylesheet" href="./public/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/klant.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
              <a href="dbinsert.php" class="nav-item nav-link">Create</a>
              <a href="dbread.php" class="nav-item nav-link">Read</a>
              <a href="dbupdate.php" class="nav-item nav-link">Update</a>
              <a href="dbdelete.php" class="nav-item nav-link">Delete</a>
              <a href="dbsearch.php" class="nav-item nav-link">Search</a>
              <a href="dbklantauto.php" class="nav-item nav-link">Auto Lijst</a>
              <a href="typeauto.php" class="nav-item nav-link">Autotype Lijst</a>
              <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
	<?php
        
        require_once "connection.php";
        
<<<<<<< HEAD
        // gegevens uit het formulier halen
=======
        ## Klantgegevens en autogegevens worden voorbereid en daarna worden alleen maar bepaalde dingen eruitgehaald
>>>>>>> bc42e911608598b5dd99441b8729fe240f70e9c5
        $klanten= $conn->prepare("SELECT klantnaam,
                              a.automerk , a.autotype
                              FROM   klantgegevens
                              INNER JOIN autogegevens a on klantgegevens.klantid = a.klantid
        ");
        ## Taak wordt uitgevoerd
            $klanten->execute();
        echo "<tabel>";
        ## Alle data wordt hier gepost die we uit 2 databases hebben gehaald
            foreach($klanten as $klant)
        {
            echo "<tr>";
            echo "<div style='margin-top: 20px; margin-bottom: -2px; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede;' class='container'><br/>";
            echo "<td>"."Klantnaam: " . $klant["klantnaam"] . "</td>"."<br/>";
            echo "<td>"."Automerk: " . $klant["automerk"] . "</td>"."<br/>";
            echo "</br></div>";
        }

    echo "</tabel>";
    echo "</br>";
        echo "<div class='container'><style'margin-top: 80px; margin-bottom: 60px; margin-left: 20px' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='dbread.php'>Terug naar menu</a></style></div>";
    ?>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>