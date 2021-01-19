<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style.scss">
    <title>Klant | Delete</title>
</head>
<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="./public/gebruiker.html">Garage</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expandme" >
            <div class="navbar-nav test">
              <a href="dbcreategebruiker.php" class="nav-item nav-link">Create</a>
              <a href="dbreadgebruiker.php" class="nav-item nav-link">Read</a>
              <a href="dbupdategebruiker1.php" class="nav-item nav-link">Update</a>
              <a href="dbdeletegebruiker1.php" class="nav-item nav-link">Delete</a>
              <a href="dbsearchgebruiker1.php" class="nav-item nav-link">Search</a>
             
            </div>
        </div>
    </nav>
    <!-- Einde navigatie menu -->
    <?php 

         // Database toevoegen.
        require_once "connection.php";
                
        $userid= $_POST["userid"];
        $gebruikers = $conn->prepare(' SELECT userid FROM gebruikers WHERE userid = :userid');
        $gebruikers->execute(["userid" => $userid]);

        $waarde =  $gebruikers->fetch();

        if($waarde){   
            $gebruikers = $conn->prepare("SELECT userid, naam, wachtwoord, email, functie FROM gebruikers WHERE  userid = :userid");
            $gebruikers->execute(["userid" => $userid]);

        echo "<form style='margin-top: 50px;' action ='dbupdategebruiker3.php' method='post'>";
        foreach ($gebruikers as $gebruiker){
        
         // gebruiker gegevens updaten
         echo " <input type='hidden' name='userid' ";
         echo " value=' " . $gebruiker ["userid"] . " '> <br /> ";
 
         echo "<div class='container'><label for='validationCustom01'>Naam</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'naam'" ;
         echo "value = '" . $gebruiker["naam"]. "'" ;
         echo "></div> </br>" ;
 
         echo "<div class='container'><label for='validationCustom01'>Wachtwword</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'wachtwoord'" ;
         echo "value = '" . $gebruiker["wachtwoord"]. "'" ;
         echo "></div> </br>" ;
 
      
         echo " <div class='container'><label for='validationCustom01'>Email</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'email'" ;
         echo "value = '" . $gebruiker["email"]. "'" ;
         echo "></div> </br>" ;


         echo " <div class='container'><label for='validationCustom01'>Functie</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'functie'" ;
         echo "value = '" . $gebruiker["functie"]. "'" ;
         echo "></div> </br>" ;
     
        }
         echo "<div class='container'><button class='btn btn-success'><a style='color: white; text-decoration: none;' type='submit'>Update</a></button></div>";
         echo "</form>";
        }
        else{    
            echo"<div style='text-align: center;' class='alert alert-danger' role='alert'><p style='margin-bottom: 5px;'>Er is een fout opgetreden: Geen userid gevonden</p></div>";
        }
    ?>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
