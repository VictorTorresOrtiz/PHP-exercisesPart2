<?php 

setcookie('contador', 0, time() - 1);
header("location: 006contadorVisitas.php");