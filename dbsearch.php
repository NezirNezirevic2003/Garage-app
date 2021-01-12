<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant | Search</title>
    <link rel="stylesheet" href="./public/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/klant.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
                <a href="dbinsert.php" class="nav-item nav-link">Create</a>
                <a href="dbread.php" class="nav-item nav-link">Read</a>
                <a href="dbupdate.php" class="nav-item nav-link">Update</a>
                <a href="dbdelete.php" class="nav-item nav-link">Delete</a>
                <a href="dbsearch.php" class="nav-item nav-link">Search</a>
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>

    <div class="container">
    <form style="margin-top: 50px" action="dbsearch2.php" method="post" class="form-inline">
       <div class="form-group mx-sm-12 mb-10">
         <label for="inputPassword2" class="sr-only">Klant-id</label>
         <input type="text" name="klantidvak" class="form-control" id="inputPassword2" placeholder="Plaats een klant-id hier">
       <button style="margin-top: 20px" class="btn btn-primary" type="submit">Zoeken</button>
       </div>
        </form>
    </body>
    </div>
</body>
</html>