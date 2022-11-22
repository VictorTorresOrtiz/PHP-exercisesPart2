<?php
 //Creacion sesion por defecto
 session_start();
 $_SESSION["defaultMode"] = "userModeDefault";
 $sesionDefault = $_SESSION["defaultMode"];
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

    <title>008</title>
</head>
<body>
        <form method="POST" action="008fondoSesion1.php">
            <button  class="btn btn-success" name="green" value="green">green</button>
            <button  class="btn btn-dark"  name="dark" value="dark">Dark</button>
            <button  class="btn btn-primary" name="blue" value="blue">Blue</button>
        </form>

        <?php 
            //Condiciones para redirigir
            if(isset($_POST['green'])) {
                header("location: green.php");

            } elseif (isset($_POST['dark'])){
                header("location: dark.php");
  
            }elseif (isset($_POST['blue'])){
              header("location: blue.php");
            }

           
        ?>




    </form>
</body>
</html>