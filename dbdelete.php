<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant</title>
    <link rel="stylesheet" href="style.css">
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
                <a href="./dbupdate.php" class="nav-item nav-link">Update</a>
                <a href="./dbdelete.php" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

    
</body>
</html>
<?php

// database gegevens includen.
include "connection.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage";

error_reporting(0);
// id ophalen
$klantid = $_GET['klantid'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM klantgegevens WHERE klantid=$klantid";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    // terugsturen naar de hoofdpagina
    header('Location: dbread.php');
    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>