<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto | Delete</title>
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
                <a href="dbsearchauto.php" class="nav-item nav-link">Search</a>
                <a href="dbklantauto.php" class="nav-item nav-link">Auto Lijst</a>
                <a href="typeauto.php" class="nav-item nav-link">Autotype Lijst</a>
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
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

    <!-- Bootstrap scripts -->
    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>