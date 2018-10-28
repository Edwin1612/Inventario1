<?php
  //Se obtiene el id por metodo get
  $id = $_GET["id"];
//Se envian a un metodo en la clase datos, el cual borra una fila de la tabla productos por medio de un id con una sentencia Delete
  Datos::deleteProducto($id);
//Al finalizar hace un hader a la pantalla index con la variable action en valor de productos para que el controlador en la plantilla muestre la pantalla de productos
  header('Location: index.php?action=prodcutos');
?>