<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta charset="UTF-8">
        <title>Update auto 3  </title>
    </head>
    <body>
    <h1> Update auto 3  </h1>
<p>autogegevens wijzigen in de tabel 
    klant van de database garage 
</p>
<?php 
            //autogegevens uit het formulier halen.

            $autokenteken= $_POST["autokentekenvak"];
            $autotype= $_POST["autotypevak"];
            $automerk= $_POST["automerkvak"];
            $autokmstand= $_POST["autokmstandvak"];

        // connect met database
        require_once "gar-connect-auto.php";

        $sql = $conn->prepare
        ("  
        update autogegevens set      autokenteken  = :autokenteken,
                             autotype  = :autotype,
                             automerk  = :automerk, 
                             autokmstand = :autokmstand
                             where autokenteken = :autokenteken") ;

        $sql->execute 
        ([ 
            "autokenteken" => $autokenteken,
            "autotype" => $autotype,
            "automerk" => $automerk,
           "autokmstand" => $autokmstand
        ]) ;

        echo "De auto is gewijzigd . <br/>";
        echo "<a href='public/auto.html'> Trug naar het menu. </a>";
        ?>
        </body>
</html>