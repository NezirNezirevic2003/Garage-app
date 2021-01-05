<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update 2</title>
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
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
    <h1>garage update klant 2</h1>
    <p>
        dit formulier wordt gebruikt om klantgegevens te wijzigen
        in de tabel klant van de database garage 
    </p>
    <?php
    include 'connection.php';
      $klantid = $_POST["klantid"] ;
      $klantid = $_POST["klantidvak"] ;
      require_once "connection.php" ;
 
      $klanten = $conn->prepare("
                                select klantid,
                                       klantnaam,
                                       klantadres,
                                       klantpostcode,
                                       klantplaats
                                from   klantgegevens
                                where  klantid = :klantid
                                ") ;
      $klanten->execute(["klantid" => $klantid]);
 
      echo "<form action ='./dbupdate3.php' method='post'>";
      foreach ($klanten as $klant)
                {
                    echo " klantid:" . $klant ["klantid"];
                    echo " <input type='hidden' name='klantid' ";
                    echo " value=' " . $klant ["klantid"] . " '> <br /> ";
 
                    echo " klantnaam: <input type='text' ";
                    echo " name = 'klantnaam' ";
                    echo " value = ' " .$klant ["klantnaam"]. "' ";
                    echo " > <br />";
 
                    echo " klantadres: <input type='text' ";
                    echo " name = 'klantadres' ";
                    echo " value = ' " .$klant ["klantadres"]. "' ";
                    echo " > <br />";
 
                    echo " klantpostcode: <input type='text' ";
                    echo " name = 'klantpostcode' ";
                    echo " value = ' " .$klant ["klantpostcode"]. "' ";
                    echo " > <br />";
 
                    echo " klantplaats: <input type='text' ";
                    echo " name = 'klantplaats' ";
                    echo " value = ' " .$klant ["klantplaats"]. "' ";
                    echo " > <br />";
                }
                echo "<input type='submit'>";
            echo "</form>";
            
    ?>
</body>
</html>