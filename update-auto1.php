<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update 1</title>
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
                <a href="dbinsertAuto.php" class="nav-item nav-link">Create</a>
                <a href="dbreadauto.php" class="nav-item nav-link">Read</a>
                <a href="update-auto1.php" class="nav-item nav-link">Update</a>
                <a href="delete-auto1.php" class="nav-item nav-link">Delete</a>
                <a href="./login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->

<h1> Update auto 1 </h1>
<p>Dit formulier wordt gebruikt om autogegevens te wijzigen . </p>
<form action="update-auto2.php" method="post">
    Welk autokenteken wilt u wijzigen ? 
    <input type="text" name="autokenteken"> <br/>
    <input type="submit">
</form>
</body>
</html>