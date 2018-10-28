<?php
$stmt = Datos::getCategorias();
//Se piden todas las categorias por el metodo getCategorias
$registro = new MvcControlador();
//se invoca la funcion registrousuariocontroller de la clase mvccontroller;
$resultado= $registro ->AddCategoria();
//Si el resultado es success los envia con un header a el index con la variable action en categorias
if($resultado=="success")
{
  echo "entra?";
  header('Location: index.php?action=categorias');
}


?>

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-table bg-c-blue"></i>
                <div class="d-inline">
                    <h4>Lista de Categorias</h4>
                    <span>Linea de productos</span>
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
    <button class="btn btn-mat btn-success">Agregar Categoria</button></div>
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
                           <th rowspan="1" colspan="1" width="15%">Nombre de la Categoria</th>
                            <th rowspan="1" colspan="1" width="75%">Descripcion</th>
                          <th rowspan="1" colspan="1" width="75%">Agregado</th>
                            <th rowspan="1" colspan="1" width="5%">Ver</th>
                            <th rowspan="1" colspan="1" width="5%">Borrar</th>
                          </th>
                        </thead>
                        <tbody> 
                          <?php while($datos = $stmt->fetch(PDO::FETCH_ASSOC))
                        //Se hace un array asociativo para poder sacar los valores
                            {?>
                          <tr>
                            <td rowspan="1" colspan="1"><?=$datos["nombre"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["descripcion"]?></td>
                            <td rowspan="1" colspan="1"><?=$datos["fecha_agregado"]?></td>
                            <td rowspan="1" colspan="1">
                               <a href="index.php?action=verCategoria&id=<?=$datos["idCategoria"]?>" >
                                <button class="btn btn-warning"><i class="icofont icofont-warning-alt"></i></button>
                               </a>
                            </td>
                            <td rowspan="1" colspan="1">
                               <a href="index.php?action=borrarCategoria&id=<?=$datos["idCategoria"]?>">
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
                             <h4 class="modal-title">Favor de ingresar lo siguiente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <FORM method="POST" >
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Nombre de la Categoria:</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="">
                                </div>
                              <div class="form-group">    
                                    <label for="user" style="color:#111;">Descripcion:</label>
                                    <textarea rows="4" cols="50" class="form-control" name="descripcion"> Descripcion
                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12" >
                                    <a href="index.php"><input  class="btn btn-mat btn-success" type="submit" value="Agregar Categoria"></a>
                                </div>
                                </div>
                            </FORM>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
<div class="modal fade" id="ventana2" align="center">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div>
                        <div class="modal-header">
                             <h4 class="modal-title">Favor de ingresar lo siguiente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <FORM method="POST"  >
                                <div class="form-group">    
                                    <label for="user" style="color:#111;">Nombre de la Categoria:</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="">
                                </div>
                              <div class="form-group">    
                                    <label for="user" style="color:#111;">Descripcion:</label>
                                    <textarea rows="4" cols="50" class="form-control" name="descripcion"> Descripcion
                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12" >
                                    <a href="index.php"><input  class="btn btn-mat btn-success" type="submit" value="Agregar Categoria"></a>
                                </div>
                                </div>
                            </FORM>
                        </div>
                    </div>
                </div>
            </div>
    </div>