<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>auto-eigenaar1.php</title>
    <link rel="stylesheet" href="./public/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
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
              <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>

	<?php
        require_once "connection.php";
 
        $klanten= $conn->prepare("SELECT klantnaam,
                              a.automerk , a.autotype
                              FROM   klantgegevens
                              INNER JOIN autogegevens a on klantgegevens.klantid = a.klantid
        ");

            $klanten->execute();
        echo "<tabel>";
            foreach($klanten as $klant)
        {
        echo "<tr>";
        echo "<td>" . $klant["klantnaam"] ."</td>"."<br/>"."<br/>";
        echo "<td>" . $klant["automerk"] . "</td>"."<br/>"."<br/>";
        echo "<tr>";
        }

    echo "</tabel>";
        echo "<a href='gar-menu.php'> terug naar het menu </a>";
    ?>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>