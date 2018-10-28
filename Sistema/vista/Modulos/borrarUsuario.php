<?php
//Se obtiene el id por metodo get
  $id = $_GET["id"];
  Datos::deleteUsuario($id);
//Al finalizar hace un hader a la pantalla index con la variable action en valor de usuarios para que el controlador en la plantilla muestre la pantalla de usuarios
  
  header('Location: index.php?action=usuarios');
?>