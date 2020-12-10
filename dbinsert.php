<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <form class="needs-validation" novalidate>
     <div class="form-row">
         <div class="col-md-4 mb-3">
         <label for="validationCustom01">Voornaam</label>
         <input type="text" class="form-control" id="validationCustom01" placeholder="Voer uw voornaam in" required>
         <div class="valid-feedback">
             Voornaam klopt
         </div>
         </div>
         <div class="col-md-4 mb-3">
         <label for="validationCustom02">Achternaam</label>
         <input type="text" class="form-control" id="validationCustom02" placeholder="Voer uw achternaam in" required>
         <div class="valid-feedback">
             Achternaam klopt
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-6 mb-3">
         <label for="validationCustom03">Stad</label>
         <input type="text" class="form-control" id="validationCustom03" placeholder="Voer de naam van uw stad" required>
         <div class="invalid-feedback">
             Stad naam klopt
         </div>
         </div>
         <div class="col-md-3 mb-3">
         <label for="validationCustom05">Zip</label>
         <input type="text" class="form-control" id="validationCustom05" placeholder="Voer uw zipcode" required>
         <div class="invalid-feedback">
             Zip code klopt
         </div>
         </div>
     </div>
     <button class="btn btn-primary" type="submit">Verzenden</button>
     </form>


    <script src="./validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>