<?php
### Je voegt de database connectie hierin
include "connection.php";

try {
    ### Hier insert je gegevens in sql query op php databse
    $stmt = $conn->prepare("INSERT INTO autogegevens (autokenteken, automerk, autotype, autokmstand, klantid) 
    VALUES (:autokenteken, :automerk, :autotype, :autokmstand, :klantid)");
    $stmt->bindParam(':autokenteken', $autoKenteken);
    $stmt->bindParam(':automerk', $autoMerk);
    $stmt->bindParam(':autotype', $autoType);
    $stmt->bindParam(':autokmstand', $autoKmStand);
    $stmt->bindParam(':klantid', $klantid);

    ### Hier gebeurt er actie alleen als autokenteken is ingevuld
    if (isset($_REQUEST['autokenteken']))
 {
    $autoKenteken = $_POST['autokenteken'];
    $autoMerk = $_POST['automerk'];
    $autoType = $_POST['autotype'];
    $autoKmStand = $_POST['autokmstand'];
    $klantid = $_POST['klantid'];
    $stmt->execute();

    
header('Location: dbinsertAuto.php');
    }}
    ### Als er een fout is krijg je een error op het scherm
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
    <title>Monteur</title>
    <link rel="stylesheet" href="./public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./klant.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
                <a href="./dbinsert.php" class="nav-item nav-link">Create</a>
                <a href="./dbread.php" class="nav-item nav-link">Read</a>
                <a href="" class="nav-item nav-link">Update</a>
                <a href="" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

    <!-- Verzend formulier -->
     <form class="needs-validation" method="post" novalidate>
     <div class="form-row">
         <div class="col-md-4 mb-3">
               <label for="validationCustom01">Autokenteken</label>
         <input type="text" class="form-control" id="autokenteken" name="autokenteken"  placeholder="Voer het kenteken nummer in" required>
         <div class="valid-feedback">
            Autokenteken klopt.
         </div>
         </div>
         <div class="col-md-4 mb-3">
               <label for="validationCustom02">Automerk</label>
         <input type="text" class="form-control" id="automerk" name="automerk" placeholder="Voer het automerk in" required>
         <div class="valid-feedback">
            Automerk klopt.
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-6 mb-3">
               <label for="validationCustom03">Autotype</label>
         <input type="text" class="form-control" id="autotype" name="autotype" placeholder="Voer het type auto in." required>
         <div class="invalid-feedback">
            Type auto klopt
         </div>
         </div>
         <div class="col-md-3 mb-3">
               <label for="validationCustom05">Auto kilometer stand</label>
         <input type="text" class="form-control" id="autokmstand" name="autokmstand" placeholder="Voer de kilometer stand van de auto in" required>
         <div class="invalid-feedback">
            Kilometer stand klopt.
         </div>
         </div>
         <div class="col-md-3 mb-3">
               <label for="validationCustom05">Klant id</label>
         <input type="text" class="form-control" id="klantid" name="klantid" placeholder="Voer hier de klantid in" required>
         <div class="invalid-feedback">
            Klantid klopt.
         </div>
         </div>
     </div>
     <button class="btn btn-primary" type="submit">Verzenden</button>
     </form>
    <!-- Einde Verzend formulier -->

    <!-- Bootstrap scripts -->
    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>