<?php 


    if ($_REQUEST['light'] == 'light')
        setcookie("color","#ffffff", time() + 0 * 24 * 0 * 0); //24 HORAS


    elseif ($_REQUEST['dark'] == 'dark')
        setcookie("color","#000000", time() + 0 * 24 * 0 * 0); //24 HORAS
        
    elseif ($_REQUEST['blue'] == 'blue')
        setcookie("color","#0000FF", time() + 0 * 24 * 0 * 0); //24 HORAS    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="008fondoSesion1.css" rel="stylesheet" type="text/css"/>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script defer src="008fondoSesion1.js"></script>
    <!--Bootstrap JS and CSS files-->

    <title>008</title>
</head>
<body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
    <form action="008fondoSesionComprobar.php" method="POST">
        <button type="button" class="btn btn-light" onclick="lightMode()" name="light" value="light">Light Mode</button>
        <button type="button" class="btn btn-dark" onclick="darkMode()" name="dark" value="dark">Dark Mode</button>
        <button type="button" class="btn btn-primary" onclick="blueMode()" name="blue" value="blue">Blue Mode</button>
    </form>

</body>
</html>