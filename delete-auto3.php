<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete 3</title>
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
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
        <h1>Delete auto 3</h1>
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