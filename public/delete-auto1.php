<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>gar-delete-auto1.php</title>  
    </head>
    <body>
        <h1>garage delete auto 1</h1>
        <p>
           Dit formulier zoekt een auto op uit
           de tabel auto van database garage
           om hem te kunnen verwijderen.
        </p>
        <form action="delete-auto2.php" method="post">
            Welk autokenteken wilt u verwijderen?
            <input type="text" name="autokenteken"> <br />
            <input type="submit">
        </form>
    </body>
</html>