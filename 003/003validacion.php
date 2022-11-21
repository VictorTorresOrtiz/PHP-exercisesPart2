<?php
//Comprobar si llegan los datos por post 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  //Comprobar campos txt Apellidos y Nombre
  function validar_nombre(string $texto): bool
  {
      return !(trim($texto) == '');

  }
  function validar_apellidos(string $texto): bool
  {
      return !(trim($texto) == '');

  }

  //Validar campos numéricos  Convivientes
  function validar_convivientes(string $numero): bool
  {
      return (filter_var($numero, FILTER_VALIDATE_INT) === FALSE) ? False : True;
  }
  //Validar EMAIL
  function validar_email(string $texto): bool
  {
      return (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE) ? False : True;
  }

  
  //Variables
  $errores = [];
  $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
  $apellidos = isset($_GET['apellidos']) ? $_GET['apellidos'] : null;
  $convivientes = isset($_GET['convivientes']) ? $_GET['convivientes'] : null;
  $hobbies = isset($_GET['hobbies']) ? $_GET['hobbies'] : null;
  $gustos = isset($_GET['gustos']) ? $_GET['gustos'] : null;
  $email = isset($_GET['email']) ? $_GET['email'] : null;


  //Validaciones

  //Nombre y Apellidos
  if (!validar_nombre($nombre)) {
    $errores[] = 'El campo Nombre es obligatorio.';
  }

  if (!validar_apellidos($nombre)) {
    $errores[] = 'El campo Apellidos es obligatorio.';
  }


  //Email

  if (!validar_email($email)) {
    $errores[] = 'El campo de Email tiene un formato no válido.';
  }

  //convivientes
  if (!validar_convivientes($convivientes)) {
    $errores[] = 'Debe ser un número.';
}

/*
$sexo[] = $_POST("sexo") ? $_POST['sexo'] : null;
  foreach ($sexo as $sexo){
    if (empty($sexo) ){
        $errores[] = 'Selecciona un Campo Sexo';
    }
  }
  */  
  

/*
$hobbies[] = $_POST("hobbies") ? $_POST['hobbies'] : null;
  foreach ($hobbies as $hobbies){
    if (empty($hobbies)){
        $errores[] = 'Selecciona un Campo hobbies';
    }
  }
  */

/*
$gustos[] = $_POST("gustos") ? $_POST['gustos'] : null;
  foreach ($gustos as $gustos){
    if (empty($gustos)){
        $errores[] = 'Selecciona tus gustos';
    }
}
*/

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
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap JS and CSS files-->

    <title>002</title>
</head>
<body>
  
    <!--Monstrar Errores-->
    <?php if (isset($errores)): ?>
        <ul class="errores">
            <?php 
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                } 
            ?> 
        </ul>
        <?php endif; ?>


    <form class="col-sm-5" method="GET">
        <div class="form-group row mb-2">
          <label for="nombre"  class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
          </div>
        </div>
        <div class="form-group row mb-2">
            <label for="apellidos" name="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-group row mb-2">
            <label for="convivientes" name="convivientes" class="col-sm-2 col-form-label">Convivientes</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="convivientes" id="convivientes" placeholder="¿Cuantas personas viven en tu casa?">
            </div>
          </div>
        <div class="form-group row mb-5">
          <label for="Email" name="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
        </div>


        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo[]" id="sexoF" value="Femenino">
                <label class="form-check-label" for="sexoF">
                  Femenino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo[]" id="sexoM" value="Masculino">
                <label class="form-check-label" for="sexoM">
                  Masculino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo[]" id="sexoN" value="No especificado" checked>
                <label class="form-check-label" for="sexoN">
                  No especificar
                </label>
              </div>
            </div>
          </div>
        </fieldset>



        <fieldset class="form-group mt-3">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Hobbies</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" id="hobbiesChill" value="De chill" checked>
                  <label class="form-check-label" for="hobbiesChill">
                    De chill
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" id="hobbiesGames" value="Videojuegos">
                  <label class="form-check-label" for="hobbiesGames">
                    Videojuegos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" id="hobbiesParty" value="Fiestas">
                  <label class="form-check-label" for="hobbiesParty">
                    Fiestas
                  </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" id="hobbiesSport" value="Deporte">
                    <label class="form-check-label" for="hobbiesSport">
                      Deporte
                    </label>
                  </div>
              </div>
            </div>
          </fieldset>
          <select class="form-select form-select-sm m-lg-5" aria-label=".form-select-sm example" name="gustos[]">
            <option selected>¿A ti que te gusta?</option>
            <option value="Patatas">Patatas</option>
            <option value="Filetes">Filetes</option>
            <option value="Tu Novia">Tu novia</option>
            <option value="Yo">Yo</option>
          </select>
        <div class="form-group row">
          <div class="col-sm-10 mt-3">
            <button type="submit" name ="enviar" value="enviar" class="btn btn-primary">Check</button>
          </div>
        </div>
      </form>
    
</body>
</html>