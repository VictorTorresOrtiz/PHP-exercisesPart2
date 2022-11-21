<?php 

    if (isset ($_POST['color'])){
        $color = $_POST['color'];
        setcookie("colorCookie", $color , time() + 0 * 24 * 0 * 0); //24 HORAS 
        echo '<body style="background-color: #ffff>';

    } elseif (isset ($_POST['light'])){
        $color = $_POST['light'];
        setcookie("lightColorCookie", $light , time() + 0 * 24 * 0 * 0); //24 HORAS 
        echo '<body style="background-color: black>';

    } elseif (isset ($_POST['blue'])){
        $color = $_POST['blue'];
        setcookie("lightColorCookie", $blue , time() + 0 * 24 * 0 * 0); //24 HORAS 
        echo '<body style="background-color: blue>';

    } else {
        //Primera entrada por URL ¿hay cookie?
        if (isset($_COOKIE['color'])){ //Verificar si existe la cookie color
            $color = $_COOKIE['color'];
        } else {
            //SI NO HAY COOKIE PONEMOS COLOR POR DEFECTO
            $color = 'white';
        }
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
    <input type="submit" value="Cambiar Color"/>

    </form>
</body>
</html>