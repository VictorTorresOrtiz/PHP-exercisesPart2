<?php 
//Empieza la sesion
session_start();
   
if( isset( $_SESSION['contador'] ) ) {
    $_SESSION['contador'] += 1;
}else {
    $_SESSION['contador'] = 1;
}

//Borrar Cookies

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

    <title>001 server</title>
</head>
<body>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Contador
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                <p>Nuestras visitas <?php print $_SESSION['contador'] ?></p>
                <div class="form-check">
                <form method="POST">
                    <input class="form-check-input" type="checkbox"  name="reinicio">
                    <label class="form-check-label" for="reset">
                        ¿Quieres borrar las Cookies?
                    </label>
                <input type="submit" value="enviar"/>
                </form>
                <?php

                $reinicio=$_POST['reinicio']; //reiniciar el contador.
                if ($reinicio=="on") {
                   unset($_SESSION['contador']);
                   }
                ?>

                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-alert" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>