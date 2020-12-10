<?php

### Je voegt de database connectie hierin
include "connection.php";

try {
    ### Hier insert je gegevens in sql query op php databse
    $stmt = $conn->prepare("INSERT INTO klantgegevens (voornaam, achternaam, stad, zip, adres) 
    VALUES (:voornaam, :achternaam, :stad, :zip, :adres)");
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->bindParam(':stad', $stad);
    $stmt->bindParam(':zip', $zip);
    $stmt->bindParam(':adres', $adres);

    ### Hier gebeurt er actie alleen als voornaam is ingevuld
    if (isset($_REQUEST['voornaam']))
 {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $stad = $_POST['stad'];
    $zip = $_POST['zip'];
    $adres = $_POST['adres'];
    $stmt->execute();

    
header('Location: dbinsert.php');
    }}
    ### Als er een fout is krijg je een error op het scherm
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <form class="needs-validation" method="post" novalidate>
     <div class="form-row">
         <div class="col-md-4 mb-3">
               <label for="validationCustom01">Voornaam</label>
         <input type="text" class="form-control" id="voornaam" name="voornaam"  placeholder="Voer uw voornaam in" required>
         <div class="valid-feedback">
            Voornaam klopt
         </div>
         </div>
         <div class="col-md-4 mb-3">
               <label for="validationCustom02">Achternaam</label>
         <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Voer uw achternaam in" required>
         <div class="valid-feedback">
            Achternaam klopt
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-6 mb-3">
               <label for="validationCustom03">Stad</label>
         <input type="text" class="form-control" id="stad" name="stad" placeholder="Voer de naam van uw stad" required>
         <div class="invalid-feedback">
            Stad naam klopt
         </div>
         </div>
         <div class="col-md-3 mb-3">
               <label for="validationCustom05">Zip</label>
         <input type="text" class="form-control" id="zip" name="zip" placeholder="Voer uw zipcode" required>
         <div class="invalid-feedback">
            Zip code klopt
         </div>
         </div>
         <div class="col-md-3 mb-3">
               <label for="validationCustom05">Adres</label>
         <input type="text" class="form-control" id="adres" name="adres" placeholder="Voer uw adres hier" required>
         <div class="invalid-feedback">
            Zip code klopt
         </div>
         </div>
     </div>
     <button class="btn btn-primary" type="submit">Verzenden</button>
     </form>


    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

