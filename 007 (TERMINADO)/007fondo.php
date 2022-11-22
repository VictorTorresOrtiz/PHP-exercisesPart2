
<html>
    <head>
            <!--Bootstrap JS and CSS files-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link href="style.css" rel="stylesheet" type="text/css"/>
            <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

            <!--Bootstrap JS and CSS files-->
    </head>
    <body>
        <form method="POST" action="007fondo.php">
            <button  class="btn btn-succees" name="green" value="green">green</button>
            <button  class="btn btn-dark"  name="dark" value="dark">Dark</button>
            <button  class="btn btn-primary" name="blue" value="blue">Blue</button>
        </form>


        <?php
        //Condiciones para redirigir 
         if(isset($_POST['green'])) {
            header("location: 007green.php");

          } elseif (isset($_POST['dark'])){
              header("location: 007dark.php");

          }elseif (isset($_POST['blue'])){
            header("location: 007blue.php");
          }

        //Cookies por defecto si no existe ninguna
        $cookie_name = "defaultMode";
        $cookie_value = "defaultUserMode";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

            //Si no existe la cookie establece el balor a default con fondo blanco por defecto
            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
            }

            ?>

    </body>
</html>