<?php
session_start();
session_destroy();
unset($_SESSION["test"]);
header("Location: ../010/index.php");