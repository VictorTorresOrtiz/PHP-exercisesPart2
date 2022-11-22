<?php
//Borrar cookie
setcookie('defaultMode', 'defaultUserMode', time() - 1);

//Crear nueva cookie
$cookie_name = "blueMode";
$cookie_value = "blueUserMode";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//Valores de la cookie
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>BLUE</title>
</head>
<body class="blue-mode">
    <h1>EY</h1>
</body>
</html>