<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="./public/style.css">
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
                <a href="login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

        <p>
            Dit zijn alle gegevens uit de 
            tabel auto van de database garage.
        </p>
        <?php
            // Database toevoegen.
            require_once "connection.php";

            // select query
            $sqlSelect = "SELECT * from autogegevens";
            $autos = $conn->query($sqlSelect);


            echo "<tabel>";
                foreach($autos as $auto)
                {
                    echo "<tr>";
                    echo "<td>"."Autokenteken: " . $auto["autokenteken"] . "</td>"."<br/>";
                    echo "<td>"."Automerk: " . $auto["autotype"] . "</td>"."<br/>";
                    echo "<td>"."Automerk: " . $auto["automerk"] . "</td>"."<br/>";
                    echo "<td>"."Autokmstand: " . $auto["autokmstand"] . "</td>"."<br/>";
                    echo "<td>"."Klantid: " . $auto["klantid"] . "</td>"."<br/>"."<br/>";
                    echo "</br>";
                    echo "<button style='margin-top: -90px;'type='button' class='btn btn-success'><a style='color: white; text-decoration: none;' href='update-auto1.php?id=[klantid]'>Bewerken</a></button>";
                    echo "<button style='margin-left: 10px; margin-top: -90px;' type='button' class='btn btn-danger'><a style='color: white; text-decoration: none;' href='delete-auto1.php?id=[klantid]'>Verwijderen</a></button>";
                    echo "</br>";
                }
            echo "</tabel>";
            echo "<button style='margin-top: 20px; margin-bottom: 60px; margin-left: 20px' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='public/auto.html'>Terug naar menu</a></button>";
        ?>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
