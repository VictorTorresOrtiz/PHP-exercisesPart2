<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap JS and CSS files-->

    <title>004</title>
</head>
<body>

    <form method="POST" enctype="multipart/form-data">

        <div class="mb-3 ">
            <label for="anchura" class="form-label">Anchura</label>
            <input type="text" class="form-control" name="anchura" id="anchura" placeholder="Especifica anchura">
          </div>
          <div class="mb-3">
            <label for="altura" class="form-label">Altura</label>
            <input type="text" class="form-control" name="altura" id="altura" placeholder="Especifica Altura">
          </div>
          <div class="mb-3">
            <label for="fileToUpload" class="form-label">Subir Imagen</label>
            <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
          </div>

        <input type="submit" value="Enviar">
        
    </form>
    
</body>
</html>

