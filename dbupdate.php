<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./klant.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
            <a href="./dbinsert.php" class="nav-item nav-link">Create</a>
                <a href="./dbread.php" class="nav-item nav-link">Read</a>
                <a href="./dbupdate.php" class="nav-item nav-link">Update</a>
                <a href="" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

<?php


// PDO connect importeren
include "connection.php";


// id ophalen
$klantid = $_GET['klantid'] ?? null;


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// als er op de knop is geklikt...
if (isset($_REQUEST['voornaam']))
 {
// waarden ophlaen
$klantid = $_POST['klantid'];
$klantnaam = $_POST['klantnaam'];
$klantadres = $_POST['klantadres'];
$klantpostcode = $_POST['klantpostcode'];
$klantplaats = $_POST['klantplaats'];



// query opstellen
$sql = "UPDATE klantgegevens SET WHERE klantid = '$klantid', klantnaam = '$klantnaam', klantadres = '$klantadres', klantpostcode = '$klantpostcode', klantplaats = '$klantplaats' "; 


// Prepare statement
$stmt = $conn->prepare($sql);
$stmt->execute();
echo "Succesvol bijgewerkt";
// terugsturen naar de hoofdpagina
header('Location: connection.php');
 }

$sqlSelect = "SELECT * FROM klantgegevens WHERE klantid = '$klantid'";
$data = $conn->query($sqlSelect);
$data = $conn->query($sqlSelect);

$conn = null;

     
?>
<form method='post'><table width='400' border='0' cellspacing='1' cellpadding='2'>
<tr><td width=100>klantid</td><td><input name='klantid' type='text' id='klantid' value=''></td></tr>
<tr><td width='100'>klantnaam</td><td><input name='klantnaam' type='text' id='klantnaam' value=''></td>
</tr><tr>
<tr><td width='100'>klantadres</td><td><input name='klantadres' type='text' value=''></td>
</tr>
<tr><td width=100>klantpostcode</td><td><input name='klantpostcode' type='text' id='klantpostcode' value=''></td></tr>
<tr><td width=100>klantplaats</td><td><input name='klantplaats' type='text' id='klantplaats' value='' ></td></tr>
</table>
</br>
<input type="submit" value="Updaten"></td>
</form>
<?
 
?>






   


