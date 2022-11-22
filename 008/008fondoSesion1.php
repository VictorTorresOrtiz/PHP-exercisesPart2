<?php 
    //SESIONES PARA CADA COLOR 
if (isset ($_POST['light'])){
        $color = $_POST['light'];
        session_start();
        $sesion = $_SESSION["light"];
        echo '<body style="background-color: #ffff></body>';
        echo '<p>' + print_r($_SESSION);

} elseif (isset ($_POST['dark'])){
        $color = $_POST['dark'];
        session_start();
        $sesion = $_SESSION["dark"];
        echo '<body style="background-color: black></body>';

} elseif (isset ($_POST['blue'])){
        $color = $_POST['blue'];
        session_start();
        $sesion = $_SESSION["blue"];
        echo '<body style="background-color: blue></body>';

} 


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
    <select class="form-select" name ="color" size="3" aria-label="size 3 select example">
        <option value="light" name ="light" >Light</option>
        <option value="dark" name="dark" >Dark</option>
        <option value="blue" name="blue" >Blue</option>
    </select>

    <a href="">
        <button type="button" class="btn btn-primary mt-5">Siguiente Ejercicio</button>
        <input type="submit" value="Cambiar Color"/>
    </a>
    


    </form>
</body>
</html>