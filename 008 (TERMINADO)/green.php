<?php
//Destruimos sesion 
session_start();
$_SESSION["greenMode"] = "greenUserMode";
$sesionDefault = $_SESSION["greenMode"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap JS and CSS files-->
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>GREEN</title>
</head>
<body class="green-mode">
    <h1>EY</h1>

        <form method="POST" action="008fondoSesion1.php">
            <button  class="btn btn-dark"  name="borrar" value="borrar">Cerrar Sesion</button>
        </form>

        <?php
            //si posteamos se borra la sesion y redireccion
            if(isset($_POST['borrar'])) {
                unset($_SESSION['greenMode']);
                header("location: 008fondoSesion1.php");
            }
        ?>
</body>
</html>