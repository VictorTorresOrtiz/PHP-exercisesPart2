<?php
$parametros_email = $_POST["email"];
$parametros_password = $_POST["password"];
$parametros_pregunta = $_POST["pregunta"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!--Bootstrap JS and CSS files-->

    <title>001 server</title>
</head>
<body>

<!-- Vertically centered modal -->
<div class="modal-dialog modal-dialog-centered">
  ...
</div>
            <p>Tu correo es: <?php echo $parametros_email?></p>
            <p>Tu contraseña es: <?php echo $parametros_password?></p>
            <p>Has aceptado las condiciones: <?php echo $parametros_pregunta?></p>  
    </div>
</body>
</html>


 