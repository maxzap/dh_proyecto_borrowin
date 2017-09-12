<?php
function validData($data)
{
  if ($data["user"] == "admin" && $data["password"] == "123456") {
    header("Location: successLogin.php");
  } else {
    header("Location: errorLogin.php?msg=invalidUser");
  }

}
?>
