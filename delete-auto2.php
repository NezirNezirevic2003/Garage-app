<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete 2</title>
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
                <a href="../dbinsertAuto.php" class="nav-item nav-link">Create</a>
                <a href="../dbreadauto.php" class="nav-item nav-link">Read</a>
                <a href="" class="nav-item nav-link">Update</a>
                <a href="" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
        <h1>Delete auto 2</h1>
        <p>
           Op autokenteken gegevens zoeken uit de
           tabel auto van de database garage
           zodat ze verwijderd kunnen worden.
        </p>
        <?php
            // Auto kenteken uit het formulier halen
            $autokenteken = $_POST["autokentekenvak"];

            // autogegevens uit de tabel halen.
            require_once "connection.php";

            // autogegevens uit de tabel halen
             $autos = $conn->prepare("
                                        select autokenteken,
                                               automerk,
                                               autotype,
                                               autokmstand,
                                               klantid
                                        from   autogegevens
                                        where autokenteken = :autokenteken");
            $autos->execute(["autokenteken" => $autokenteken]);

            // autogegevens laten zien           
            echo "<tabel>";
            foreach($autos as $auto)
                {
                    echo "<tr>";
                    echo "<td>" . $auto["autokenteken"] . " , "."</td>";
                    echo "<td>" . $auto["autotype"] . " , "."</td>";
                    echo "<td>" . $auto["automerk"] ." , ". "</td>";
                    echo "<td>" . $auto["autokmstand"] . " , "."</td>";
                    echo "<td>" . $auto["klantid"] . " . "."</td>";
                    echo "<tr>";
                }
            echo "</tabel><br />";

            echo "<form action='delete-auto3.php' method='post'>";
                echo "<input type='hidden' name='autokenteken' value=$autokenteken>";
                echo "<input type='hidden'name='verwijder' value='0'>";
                echo "<input type='checkbox' name='verwijder' value='1'>";
                echo "Verwijder deze auto. <br />";
                echo "<input type='submit'>";
            echo "</form>";
        ?>
    </body>
</html>