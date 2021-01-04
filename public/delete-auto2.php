<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>gar-delete-auto2.php</title>  
    </head>
    <body>
        <h1>garage delete auto 2</h1>
        <p>
           Op autokenteken gegevens zoeken uit de
           tabel auto van de database garage
           zodat ze verwijderd kunnen worden.
        </p>
        <?php
            // Auto kenteken uit het formulier halen
            $autokenteken = $_POST["autokenteken"];

            // autogegevens uit de tabel halen.
            require_once "connection.php";

             $autos = $conn->prepare("
                                        select autokenteken,
                                               automerk,
                                               autotype,
                                               autokmstand,
                                               klantid
                                        from   autogegevens
                                        where autokenteken = :autokenteken");
            $autos->execute(["autokenteken" => $autokenteken]);

            // autogegevens laten zien           
            echo "<tabel>";
            foreach($autos as $auto)
                {
                    echo "<tr>";
                    echo "<td>" . $auto["autokenteken"] . " , "."</td>";
                    echo "<td>" . $auto["autotype"] . " , "."</td>";
                    echo "<td>" . $auto["automerk"] ." , ". "</td>";
                    echo "<td>" . $auto["autokmstand"] . " , "."</td>";
                    echo "<td>" . $auto["klantid"] . " . "."</td>";
                    echo "<tr>";
                }
            echo "</tabel><br />";

            echo "<form action='delete-auto3.php' method='post'>";
                echo "<input type='hidden' name='autokenteken' value=$autokenteken>";
                echo "<input type='hidden'name='verwijder' value='0'>";
                echo "<input type='checkbox' name='verwijder' value='1'>";
                echo "Verwijder deze auto. <br />";
                echo "<input type='submit'>";
            echo "</form>";
        ?>
    </body>
</html>