<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta chatset="UTF-8">
        <title>gar-delete-auto1.php</title>  
    </head>
    <body>   
        <h1>Delete auto 1</h1>
        <p>
           Dit formulier zoekt een auto op uit
           de tabel auto van database garage
           om hem te kunnen verwijderen.
        </p>
        <form action="delete-auto2.php" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Autokenteken</label>
            <input name="autokentekenvak" type="text"  class="form-control" id="inputPassword2" placeholder="Plaats Autokenteken hier" value="">
        </div>
            <input type="submit" class="btn btn-danger mb-2">
        </form>
    </body>
</html>