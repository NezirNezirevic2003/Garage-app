<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style.scss">
    <title>Klant | Delete</title>
</head>
<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/gebruiker.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
              <a href="dbcreategebruiker.php" class="nav-item nav-link">Create</a>
              <a href="dbreadgebruiker.php" class="nav-item nav-link">Read</a>
              <a href="dbupdategebruiker1.php" class="nav-item nav-link">Update</a>
              <a href="dbdeletegebruiker1.php" class="nav-item nav-link">Delete</a>
           
            </div>
        </div>
    </nav>
    <!-- Einde navigatie menu -->

    <?php
            // Userid uit het formulier halen
            $userid = $_POST["useridvak"];

            // Userid uit de tabel halen.
            require_once "connection.php";

            // Gebruiker gegevens uit de tabel halen
             $gebruikers = $conn->prepare("
                                        select userid,
                                               naam,
                                               wachtwoord,
                                               email,
                                               functie
                                        from   gebruikers
                                        where userid = :userid");
            $gebruikers->execute(["userid" => $userid]);

            // Gebruiker verwijderen          
            echo "<tabel>";
                foreach($gebruikers as $gebruiker)
                {
                    echo "<tr>";
                    echo "<div style='margin-top: 20px; margin-bottom: -30px; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede;' class='container'>userid: " . $gebruiker["userid"] . "<br/>";
                    echo "<td>"."naam: " . $gebruiker["naam"] . "</td>"."<br/>";
                    echo "<td>"."wachtwoord: " . $gebruiker["wachtwoord"] . "</td>"."<br/>";
                    echo "<td>"."email: " . $gebruiker["email"] . "</td>"."<br/>";
                    echo "<td>"."functie: " . $gebruiker["functie"] . "</td>"."<br/>"."<br/>";
                    echo "</br></div>";
                    echo "</br>";
                }
            echo "</tabel>";
 
            echo "<form action='dbdeletegebruiker3.php' method='post'>";
 
                echo "<input type='hidden' name='userid' value=$userid>";
                echo "<div class='container'><button style='margin-top: 20px; margin-bottom: 60px;' type='submit' class='btn btn-danger'><a style='color: white; text-decoration: none'>Verwijderen</a></button></div>";
            echo "</form>";
        ?>


    <!-- Bootstrap scripts -->
    <script src="./public/validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>