
<html>
    <head>
            <!--Bootstrap JS and CSS files-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link href="style.css" rel="stylesheet" type="text/css"/>
            <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script defer src="custom.js"></script>
            <!--Bootstrap JS and CSS files-->
    </head>
    <body>
        <form method="POST" action="007fondo.php">
            <button type="button" class="btn btn-light" onclick="lightMode()" name="light" value="light">Light</button>
            <button type="button" class="btn btn-dark" onclick="darkMode()" name="dark" value="dark">Dark</button>
            <button type="button" class="btn btn-primary" onclick="blueMode()" name="blue" value="blue">Blue</button>
            <input type="submit" class="btn btn-success" name="submit"></input>
        </form>

        <?php
        $cookie_name = "defaultMode";
        $cookie_value = "defaultUserMode";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        if(isset($_POST['light'])) {
             setcookie($cookie_name, $cookie_value, time() - 60); 
             $cookie_name = "lightMode";
             $cookie_value = "lightUserMode";

            } elseif(isset($_POST['dark'])) {
                setcookie($cookie_name, $cookie_value, time() - 60);
                $cookie_name = "darkMode";
                $cookie_value = "darkUserMode";

            } elseif(isset($_POST['dark'])) {
                setcookie($cookie_name, $cookie_value, time() - 60);
                $cookie_name = "blueMode";
                $cookie_value = "blueUserMode";

            }

            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
            }
            ?>

    </body>
</html>