<?php

 include "connection.php";

try {
    $stmt = $conn->prepare("INSERT INTO gebruikers (naam, wachtwoord, email, functie) 
    VALUES (:naam, :wachtwoord, :email, :functie)");
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':wachtwoord', $wachtwoord);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':functie', $functie);

    ## Hier gebeurt er actie alleen als naam is ingevuld
    if (isset($_REQUEST['naam']))
 {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
    $functie = $_POST['functie'];
    $stmt->execute();

    
header('Location: dbreadgebruiker.php');
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
    

    

<div class="container">
    <form class="needs-validation" method="post" novalidate>
     <div class="form-row">
         <div style="margin-top: 50px" class="col-md-12 mb-4">
               <label for="validationCustom01">Naam</label>
         <input type="text" class="form-control" id="naam" name="naam"  placeholder="Voer uw naam in" required>
         <div class="invalid-feedback">
            naam klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom02">Wachtwoord</label>
         <input type="text" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Voer uw wachtwoord hier" required>
         <div class="invalid-feedback">
            Wachtwoord klopt niet
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-12 mb-4">
               <label for="validationCustom03">Email</label>
         <input type="text" class="form-control" id="email" name="email" placeholder="Voer uw email hier" required>
         <div class="invalid-feedback">
            Email klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom05">Functie</label>
         <input type="text" class="form-control" id="functie" name="functie" placeholder="Voer uw functie hier" required>
         <div class="invalid-feedback">
            Functie klopt niet
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
