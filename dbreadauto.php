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

        <h1>garage read auto</h1>
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
                    echo "<td>" . $auto["autokenteken"] . "</td>"."<br/>";
                    echo "<td>" . $auto["autotype"] . "</td>"."<br/>";
                    echo "<td>" . $auto["automerk"] . "</td>"."<br/>";
                    echo "<td>" . $auto["autokmstand"] . "</td>"."<br/>";
                    echo "<td>" . $auto["klantid"] . "</td>"."<br/>"."<br/>";
                    echo "<tr>";
                }
            echo "</tabel>";
            echo "<a href='public/auto.html'> terug naar het menu </a>";
        ?>
    </body>
</html>