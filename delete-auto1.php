<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete </title>
    <link rel="stylesheet" href="./public/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/auto.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
                <a href="../dbinsertAuto.php" class="nav-item nav-link">Create</a>
                <a href="../dbreadauto.php" class="nav-item nav-link">Read</a>
                <a href="" class="nav-item nav-link">Update</a>
                <a href="" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
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