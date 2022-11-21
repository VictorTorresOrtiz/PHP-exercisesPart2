<?php 
//Comprobar si llegan los datos por get 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  //Variables
  $errores = [];
  $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;

  function validar_nombre(string $texto): bool
  {
      return !(trim($texto) == '');

  }
 

  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011</title>
</head>
<body>

<?php if (isset($errores)): ?>
        <ul class="errores">
            <?php 
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                } 
            ?> 
        </ul>
        <?php endif; 


function validar_clave($password,&$error_clave){
   if(strlen($password) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($password) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$password)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$password)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$password)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}

if ($_POST){
   $error_encontrado="";
   if (validar_clave($_POST["password"], $error_encontrado)){
      echo "PASSWORD VÁLIDO";
   }else{
      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
   }
}

?>

    
</body>
</html>