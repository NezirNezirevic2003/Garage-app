<?php

include "connection.php";

try {
    $stmt = $conn->prepare("INSERT INTO klantgegevens (klantnaam, klantadres, klantpostcode, klantplaats) 
    VALUES (:klantnaam, :klantadres, :klantpostcode, :klantplaats)");
    $stmt->bindParam(':klantnaam', $klantnaam);
    $stmt->bindParam(':klantadres', $klantadres);
    $stmt->bindParam(':klantpostcode', $klantpostcode);
    $stmt->bindParam(':klantplaats', $klantplaats);

    ## Hier gebeurt er actie alleen als voornaam is ingevuld
    if (isset($_REQUEST['klantnaam']))
 {
    $klantnaam = $_POST['klantnaam'];
    $klantadres = $_POST['klantadres'];
    $klantpostcode = $_POST['klantpostcode'];
    $klantplaats = $_POST['klantplaats'];
    $stmt->execute();

    
header('Location: dbread.php');
    }}
    ## Als er een fout is krijg je een error op het scherm
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant | Insert</title>
    <link rel="stylesheet" href="./public/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                <a href="dbsearch.php" class="nav-item nav-link">Search</a>
                <a href="dbklantauto.php" class="nav-item nav-link">Auto Lijst</a>
                <a href="typeauto.php" class="nav-item nav-link">Autotype Lijst</a>
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

    <!-- Verzend formulier -->
    <div class="container">
    <form class="needs-validation" method="post" novalidate>
     <div class="form-row">
         <div style="margin-top: 50px" class="col-md-12 mb-4">
               <label for="validationCustom01">Voornaam</label>
         <input type="text" class="form-control" id="klantnaam" name="klantnaam"  placeholder="Voer uw voornaam in" required>
         <div class="invalid-feedback">
            Voornaam klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom02">Adres</label>
         <input type="text" class="form-control" id="klantadres" name="klantadres" placeholder="Voer uw adres hier" required>
         <div class="invalid-feedback">
            Adres klopt niet
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-12 mb-4">
               <label for="validationCustom03">Zipcode</label>
         <input type="text" class="form-control" id="klantpostcode" name="klantpostcode" placeholder="Voer uw zipcode hier" required>
         <div class="invalid-feedback">
            Zipcode klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom05">Plaats</label>
         <input type="text" class="form-control" id="klantplaats" name="klantplaats" placeholder="Voer uw plaats hier" required>
         <div class="invalid-feedback">
            Plaats naam klopt niet
         </div>
         </div>
         </div>
     </div>
     <button class="btn btn-success" type="submit">Verzenden</button>
     </form>
     </div>
    <!-- Einde Verzend formulier -->

    <!-- Bootstrap scripts -->
    <script src="./public/validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

