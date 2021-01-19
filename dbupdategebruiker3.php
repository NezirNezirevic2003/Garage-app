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
              <a href="dbsearchgebruiker1.php" class="nav-item nav-link">Search</a>
             
            </div>
        </div>
    </nav>
    <!-- Einde navigatie menu -->

    <?php 
    //gebruiker gegevens uit het formulier halen.
    $userid= $_POST["userid"];
    $naam= $_POST["naam"];
    $wachtwoord= $_POST["wachtwoord"];
    $email= $_POST["email"];
    $functie= $_POST["functie"];

     // connect met database
    require_once "connection.php";

    $sql = $conn->prepare(" update gebruikers set naam  = :naam, wachtwoord = :wachtwoord, email  = :email, functie = :functie where userid = :userid") ;

    $sql->execute([ "userid" => $userid, "naam" => $naam, "wachtwoord" => $wachtwoord, "email" => $email, "functie" => $functie]) ;

    echo"<div style='text-align: center;' class='alert alert-success' role='alert'><p style='margin-bottom: 5px;'>gebruiker gegevens zijn succesvol gewijzigd</p></div>";
    echo "<div class='container'><button style='margin-top: 20px; margin-bottom: 60px;' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='dbreadgebruiker.php'>Terug naar menu</a></button></div>";
?>


    <!-- Bootstrap scripts -->
    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>