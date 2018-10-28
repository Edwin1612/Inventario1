<?php
$stmt = Datos::getProductos();
$stmt3 = Datos::getCategorias();
$registro = new MvcControlador();

//se invoca la funcion registrousuariocontroller de la clase mvccontroller;
$resultado= $registro ->addProducto();
if($resultado=="success")
{
  header('Location: index.php?action=prodcutos');
}
?>

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-table bg-c-blue"></i>
                <div class="d-inline">
                    <h4>Lista de Productos</h4>
                    <span>Productos agregados</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="index.php?action=categorias">Lista de Categorias</a>
                    </li>
                    <li class="breadcrumb-item"><a href="index.php?action=index">Inventario</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><br>
  <div class="col-md-2">
    <a href="#ventana1" data-toggle="modal" >
    <button class="btn btn-mat btn-success">Agregar Producto</button></div>
    </a>
  </div>
</div>

  
  
<div class="page-body">
  <div class="row">
  <div class="col-sm-12">
    <div class="card">
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                      <div class="dataTables_length" id="simpletable_length">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                        <thead>
                           <th rowspan="1" colspan="1" width="20%">Nombre</th>
                            <th rowspan="1" colspan="1" width="20%">Fecha Agregado</th>
                            <th rowspan="1" colspan="1" width="20%">Precio</th>
                            <th rowspan="1" colspan="1" width="10%">Stock</th>
                            <th rowspan="1" colspan="1" width="15%">Codigo</th>
                          <th rowspan="1" colspan="1" width="15%">Categoria</th>
                          <th rowspan="1" colspan="1" width="15%">Borrar</th>
                          </th>
                        </thead>
                        <tbody> 
                          <?php while($datos = $stmt->fetch(PDO::FETCH_ASSOC))
                        //Se hace un array asociativo para poder sacar los valores
                            {?>
                          <tr>
                            <td rowspan="1" colspan="1"><?=$datos["nombre"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["fecha_agregado"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["precio"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["stock"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["codigo"]?></td>
                            <?php
                              $stmt2 = Datos::getCategoriaID($datos["idCategoria"]);
                            ?>
                            <td rowspan="1" colspan="1"><?=$stmt2["nombre"]?></td>
                            <td rowspan="1" colspan="1">
                               <a href="index.php?action=borrarProducto&id=<?=$datos["idProducto"]?>">
                                <button class="btn btn-danger"><i class="icofont icofont-warning-alt"></i></button>
                               </a>
                            </td>
                          </tr>
                          <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>

        
        
<div class="modal fade" id="ventana1" align="center">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div>
                        <div class="modal-header">
                             <h4 class="modal-title">Nombre del Producto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body" >
                            <FORM method="POST" enctype="multipart/form-data">
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Nombre del producto:</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre de la Categoria" value="">
                                </div>
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Precio:</label>
                                    <input class="form-control" type="text" name="precio" placeholder="Precio" value="">
                                </div>
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Cantidad:</label>
                                    <input class="form-control" type="text" name="cantidad" placeholder="Cantidad" value="">
                                </div>
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Codigo:</label>
                                    <input class="form-control" type="text" name="codigo" placeholder="Codigo" value="">
                                </div>
                              <div class="form-group">    
                                    <label for="user" style="color:#111;">Fotografia:</label>
                                    <input class="form-control" type="file" name="foto">
                                </div>
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Categoria:</label>
                                    <select class="form-control" name="categoria">
                                      <?php while($datos = $stmt3->fetch(PDO::FETCH_ASSOC))
                                      //Se hace un array asociativo para poder sacar los valores
                                      {?>
                                      <option value="<?=$datos["idCategoria"]?>"><?=$datos["nombre"]?></option>
                                      <?php }?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12" >
                                    <input class="btn btn-mat btn-success" type="submit" name="loguearse" value="Agregar Categoria">
                                </div>
                                </div>
                            </FORM>
                        </div>
                    </div>
                </div>
            </div>
    </div>