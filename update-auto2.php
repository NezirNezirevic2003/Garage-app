<!DOCTYPE html>
<html lang="nl">
    <head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update 2</title>
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

        <h1> Update auto 2 </h1>
        <p>
            <?php 
            $autokenteken= $_POST["autokenteken"];
            require_once "connection.php";

            $autos = $conn->prepare(" 
                                     select
                                        autokenteken,
                                        automerk,
                                        autotype,
                                        autokmstand,
                                        klantid
                                from  autogegevens
                                where   autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<form action ='update-auto3.php' method='post'>";
     foreach ($autos as $auto )
     {


         echo "autokenteken: <input type='text'" ;
         echo "name = 'autokenteken'";
         echo "value = '" .$auto["autokenteken"]. "' " ;
         echo "> </br>" ;

         echo " autotype : <input type='text' " ;
         echo "name = 'autotypevak'" ;
         echo "value = '" . $auto["autotype"]. "'" ;
         echo "> </br>" ;

         echo " automerk: <input type='text' " ;
         echo "name = 'automerkvak'" ;
         echo "value = '" . $auto["automerk"]. "'" ;
         echo "> </br>" ;

      
         echo " autokmstand : <input type='text' " ;
         echo "name = 'autokmstandvak'" ;
         echo "value = '" . $auto["autokmstand"]. "'" ;
         echo "> </br>" ;
     
     
         echo " klantid :". $auto["klantid"];
         echo " <input type='hidden' name='klantidvak' " ;
         echo "value = ' " . $auto["klantid"]."'> <br/> " ;
        }
         echo "<input type='submit'>";
         echo "</form>";
         ?>
         </body>
    </html>