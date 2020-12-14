<?php
// database gegevens includen.
include "connection.php";

//select query
$sqlSelect = "SELECT * from klantgegevens";
$data = $conn->query($sqlSelect);
    
foreach ($data as $row) {
    echo $row['voornaam']." ";
    echo $row['achternaam']." ";
    echo $row['stad']." ";
    echo $row['zip']." ";
    echo $row['adres']." ";
    echo "<a href='pdoupdate.php?id=$row[id]'>Bewerken</a>";
    echo "<a href='pdodelete.php?id=$row[id]'>Verwijderen</a>";
    echo "</br>";
}  
?>