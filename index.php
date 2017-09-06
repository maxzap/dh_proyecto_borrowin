<?php
require_once "function.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion | Borrowin!</title>
  </head>
  <body>
    <?php
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        if (array_key_exists("login", $_GET)) {
          require_once "loginForm.php";
        } else {
          require_once "home.php";
        }

        break;

      case 'POST':
        validData($_POST);
        break;
    }
    ?>
  </body>
</html>
