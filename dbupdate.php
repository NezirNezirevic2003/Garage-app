<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monteur</title>
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
                <a href="" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta name="author" content="anjo eijeriks">
        <meta charset="utf-8">
        <title>gar-update-klant1.php</title>
    </head>
    <body>
        <h1>garage update klant</h1>
        <p>
            
        </p>
        <form action="dbupdate2.php" method="post">
            welk klantid wilt u wijzigen?
            <input type="text" name="klantid"> <br />
            <a href="dbupdate2.php"></a><input type="submit">
            
        </form>
    </body>
</html>
