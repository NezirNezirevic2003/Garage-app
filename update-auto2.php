<!DOCTYPE html>
<html lang="nl">
    <head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto | Update</title>
    <link rel="stylesheet" href="./public/style.scss">
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
                <a href="dbsearchauto.php" class="nav-item nav-link">Search</a>
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
    <?php 

         // Database toevoegen.
        require_once "connection.php";
                
        $autokenteken= $_POST["autokenteken"];
        $autos = $conn->prepare(' SELECT autokenteken FROM autogegevens WHERE autokenteken = :autokenteken');
        $autos->execute(["autokenteken" => $autokenteken]);

        $waarde =  $autos->fetch();

        if($waarde){   
            $autos = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM autogegevens WHERE  autokenteken = :autokenteken");
            $autos->execute(["autokenteken" => $autokenteken]);

        echo "<form style='margin-top: 50px;' action ='update-auto3.php' method='post'>";
        foreach ($autos as $auto){
        
         // autogegevens updaten
         echo "<div class='container'><label for='validationCustom01'>Autokenteken</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'" ;
         echo "name = 'autokenteken'";
         echo "value = '" .$auto["autokenteken"]. "' " ;
         echo "></div> </br>" ;
 
         echo "<div class='container'><label for='validationCustom01'>Autotype</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'autotype'" ;
         echo "value = '" . $auto["autotype"]. "'" ;
         echo "></div> </br>" ;
 
         echo "<div class='container'><label for='validationCustom01'>Automerk</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'automerk'" ;
         echo "value = '" . $auto["automerk"]. "'" ;
         echo "></div> </br>" ;
 
      
         echo " <div class='container'><label for='validationCustom01'>Autokmstand</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' " ;
         echo "name = 'autokmstand'" ;
         echo "value = '" . $auto["autokmstand"]. "'" ;
         echo "></div> </br>" ;
     
        }
         echo "<div class='container'><button class='btn btn-success'><a style='color: white; text-decoration: none;' type='submit'>Update</a></button></div>";
         echo "</form>";
        }
        else{    
            echo"<div style='text-align: center;' class='alert alert-danger' role='alert'><p style='margin-bottom: 5px;'>Er is een fout opgetreden: Geen kenteken gevonden</p></div>";
        }
    ?>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>