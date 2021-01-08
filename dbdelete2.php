<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style.css">
    <title>Klant | Delete</title>
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
              <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde navigatie menu -->

    <h1>garage delete klant 2</h1>
        <p>
           Op klantid gegevens zoeken uit de
           tabel klanten van de database garage
           zodat ze verwijderd kunnen worden.
        </p>
        <?php
            // klantid uit het formulier halen --------------
            $klantid = $_POST["klantidvak"];
 
            // klantgegevens uit de tabel halen -------------
            require_once "connection.php";
 
             $klanten = $conn->prepare("
                                        select klantid,
                                               klantnaam,
                                               klantadres,
                                               klantpostcode,
                                               klantplaats
                                        from   klantgegevens
                                        where  klantid = :klantid");
            $klanten->execute(["klantid" => $klantid]);
 
            // klantgegevens laten zien -----------
            echo "<tabel>";
            foreach($klanten as $klant)
                {
                    echo "<tr>";
                    echo "<td>" . $klant["klantid"] . " , "."</td>";
                    echo "<td>" . $klant["klantnaam"] ." , ". "</td>";
                    echo "<td>" . $klant["klantadres"] . " , "."</td>";
                    echo "<td>" . $klant["klantpostcode"] ." , ". "</td>";
                    echo "<td>" . $klant["klantplaats"] ." . ". "</td>";
                    echo "<tr>";
                }
            echo "</tabel><br />";
 
            echo "<form action='dbdelete3.php' method='post'>";
 
                echo "<input type='hidden' name='klantidvak' value=$klantid>";
                echo "<input type='hidden'name='verwijdervak' value='0'>";
                echo "<input type='checkbox' name='verwijdervak' value='1'>";
                echo "Verwijder deze klant. <br />";
                echo "<input type='submit'>";
            echo "</form>";
        ?>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>