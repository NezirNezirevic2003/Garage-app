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
$id = $_GET['id'];

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// als er op de knop is geklikt...
if (isset($_REQUEST['voornaam']))
 {
// waarden ophlaen
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$zipcode = $_POST['zipcode'];
$plaats = $_POST['plaats'];



// query opstellen
$sql = "UPDATE test SET voornaam = '$voornaam', achternaam = '$achternaam', leeftijd = '$leeftijd' WHERE id = '$id'";

// Prepare statement
$stmt = $conn->prepare($sql);
$stmt->execute();
echo "Succesvol bijgewerkt";
// terugsturen naar de hoofdpagina
header('Location: pdoselect.php');
 }

$sqlSelect = "SELECT * FROM test WHERE id =$id";
$data = $conn->query($sqlSelect);
$data = $conn->query($sqlSelect);

$conn = null;
foreach ($data as $row) {
     
?>
<form method='post'><table width='400' border='0' cellspacing='1' cellpadding='2'>
<tr><td width=100>Voornaam</td><td><input name='voornaam' type='text' id='voornaam' value=<? echo $row['voornaam'] ?>></td></tr>
<tr><td width='100'>Achternaam</td><td><input name='achternaam' type='text' id='achternaam' value='<? echo $row['achternaam']; ?>'></td>
</tr><tr>
<tr><td width='100'>Leeftijd</td><td><input name='leeftijd' type='text' value='<? echo $row['leeftijd']; ?>'></td>
</tr></table>
</br>
<input type="submit" value="Updaten"></td>
</form>
<?
 }
?>
<a href="connectpdovoorbeeld.php">PDO connect voorbeeld</a></br>
<a href="pdoinsertform.php">PDO INSERT FORM</a></br>
<a href="pdodelete.php">PDO DELETE voorbeeld</a></br>
<a href="pdoupdate.php">PDO UPDATE voorbeeld</a></br>
<a href="pdoinsert.php">PDO INSERT voorbeeld zonder FORM</a></br>

<form method="post">
    <input type="submit" name="submit" value="Klik voor de broncode">
</form>
<?php
}

   show_source(__FILE__);


?>