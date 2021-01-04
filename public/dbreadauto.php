<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta charset="UTF-8">
        <title>gar-read-auto.php</title>  
    </head>
    <body>
        <h1>garage read auto</h1>
        <p>
            Dit zijn alle gegevens uit de 
            tabel auto van de database garage.
        </p>
        <?php
            // Database toevoegen.
            require_once "connection.php";

            // select query
            $sqlSelect = "SELECT * from autogegevens";
            $auto = $conn->query($sqlSelect);


            echo "<tabel>";
                foreach($autos as $auto)
                {
                    echo "<tr>";
                    echo "<td>" . $auto["autokenteken"] . "</td>"."<br/>";
                    echo "<td>" . $auto["autotype"] . "</td>"."<br/>";
                    echo "<td>" . $auto["automerk"] . "</td>"."<br/>";
                    echo "<td>" . $auto["autokmstand"] . "</td>"."<br/>";
                    echo "<td>" . $auto["klantid"] . "</td>"."<br/>"."<br/>";
                    echo "<tr>";
                }
            echo "</tabel>";
            echo "<a href='../auto.html'> terug naar het menu </a>";
        ?>
    </body>
</html>