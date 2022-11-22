
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>006</title>
</head>
<body>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Contador
      </button>

      
      <!--Borrar Cookies-->
      <form method="POST" action="006contadorVisitas.php" >
        <input type="submit" value ="Borrar Cookies "name="submit" onclick="borrar()"></input>
      </form>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tus visitas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                <p>Nuestras visitas <?php print $_COOKIE['contador'] ?></p>
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

<?php 

  
if( isset( $_COOKIE['contador'] ) ) {
    setcookie('contador', $_COOKIE['contador']+1 , time()+365*24*60*60); //Incrementamos contador cada visita


}else { // si nunca a entrado
    setcookie('contador', 1, time()+365*24*60*60); //Creacion de nueva cookie que dure 1 año
    echo "Bienvenidos por primera vez";
}

function borrar(){
  if (isset($_POST['submit'])){
    setcookie( 'contador', 0, time()- 0);
  }
}
 
?>