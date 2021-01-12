<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant | Update</title>
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
                <a href="dbinsert.php" class="nav-item nav-link">Create</a>
                <a href="dbread.php" class="nav-item nav-link">Read</a>
                <a href="dbupdate.php" class="nav-item nav-link">Update</a>
                <a href="dbdelete.php" class="nav-item nav-link">Delete</a>
                <a href="dbsearch.php" class="nav-item nav-link">Search</a>
                <a href="public/login.html" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Einde Navigatie menu -->
    <?php
    require_once "connection.php";
      $klantid = $_POST["klantid"];
      
      $klanten = $conn->prepare(' SELECT klantid FROM klantgegevens WHERE klantid = :klantid');
      $klanten->execute(["klantid" => $klantid]);
      $waarde =  $klanten->fetch();

      if($waarde){   
      $klanten = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klantgegevens WHERE  klantid = :klantid");
      $klanten->execute(["klantid" => $klantid]);
 
      echo "<form style='margin-top: 50px' action ='./dbupdate3.php' method='post'>";
      foreach ($klanten as $klant){
                
                echo " <input type='hidden' name='klantid' ";
                echo " value=' " . $klant ["klantid"] . " '> <br /> ";
                
                echo "<div class='container'><label for='validationCustom01'>Klantnaam</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' ";
                echo " name = 'klantnaam' ";
                echo " value = ' " .$klant ["klantnaam"]. "' ";
                echo " ></div> <br />";
 
                echo " <div class='container'><label for='validationCustom01'>Klantadres</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' ";
                echo " name = 'klantadres' ";
                echo " value = ' " .$klant ["klantadres"]. "' ";
                echo " ></div> <br />";
 
                echo " <div class='container'><label for='validationCustom01'>Klantpostcode</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' ";
                echo " name = 'klantpostcode' ";
                echo " value = ' " .$klant ["klantpostcode"]. "' ";
                echo " ></div> <br />";
                
                echo " <div class='container'><label for='validationCustom01'>Klantplaats</label><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' ";
                echo " name = 'klantplaats' ";
                echo " value = ' " .$klant ["klantplaats"]. "' ";
                echo " ><div> <br />";
                }
                echo "<button class='btn btn-success'><a style='color: white; text-decoration: none;' type='submit'>Update</a></button>";
                echo "</form>";
                }else {
                    echo"<div style='text-align: center;' class='alert alert-danger' role='alert'><p style='margin-bottom: 5px;'>Er is een fout opgetreden: klant-id niet gevonden</p></div>";
                 } 
            
    ?>
    
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

