
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    switch ($_GET['msg']) {
      case 'invalidUser':
        echo "Login Incorrecto";
        break;

      case 'dataRequired':
        echo "Intentar nuevamente";
        break;
    }
    ?>
  </body>
</html>
