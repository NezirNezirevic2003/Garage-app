<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta charset="UTF-8">
        <title>Update auto 2 </title>
    </head>
    <body>
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