<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
   
    <h2 class="">Maestro</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li class="active">Maestro</a></li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-7">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Maestro</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>
                  <?php if($_SESSION['tipoUsuario']==1){?>
                  <div class="btn-group" style="margin-right: 10px;"> 
                      <a class="btn btn-sm btn-success tooltips" href="?c=Maestro&a=Crud" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar nuevo Maestro"> <i class="fa fa-plus"></i> Registrar </a>
                  </div>
                  <?php } ?>
                </b>
              </div>
            </div>    
          </div>
        </div>
        <?php if(isset($mensaje)){ if(!isset($error)){?>
        <div class="row" style="margin-bottom: -20px; margin-top: 20px">
          <div class="col-md-12">
            <div class="alert alert-success fade in">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <i class="fa fa-check"></i>&nbsp;<?php echo $mensaje; ?>
            </div>
          </div>
        </div> 
        <?php } if(isset($error)){ ?>
        <div class="row" style="margin-bottom: -20px; margin-top: 20px">
          <div class="col-md-12">
            <div class="alert alert-danger">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <i class="fa fa-warning"></i>&nbsp;<?php echo $mensaje; ?>
            </div>
          </div>
        </div>
        <?php } }?>
        <div class="porlets-content">
          <div class="table-responsive">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
                <tr>
                  <th>Clave Maestro</th>
                  <th>Nombre</th>
                   <th>Departamento</th>
                  <?php if($_SESSION['tipoUsuario']==1){?>
                  <td><center><b>Editar</b></center></td>
                  <td><center><b>Borrar</b></center></td> 
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
               <?php foreach($this->model->Listar() as $r): ?>
                <tr class="gradeA">
                  <td> <?php echo $r->claveMaestro; ?></td>
                  <td> <?php echo $r->nombre."  ".$r->apellidos;  ?></td>
                   <td> <?php echo $r->departamento; ?></td>
                  <?php if($_SESSION['tipoUsuario']==1){?>
                  <td class="center">
                    
                    <a href="index.php?c=Maestro&a=Crud&idMaestro=<?php echo $r->idMaestro ?>" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>

                  </td>
                 <td class="center">
                  <a onclick="eliminarMaestro(<?php echo $r->idMaestro;?>);" class="btn btn-danger btn-sm" href="#modalEliminar" style="margin-right: 10px;"  data-toggle="modal" data-target="#modalEliminar" role="button"><i class="fa fa-eraser"></i></a>
                </td>
                <?php } ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Clave Maestro</th>
              <th>Nombre</th>
              <th>Departamento</th>

              <?php if($_SESSION['tipoUsuario']==1){?>
              <td><center><b>Editar</b></center></td>
              <td><center><b>Borrar</b></center></td> 
              <?php } ?>
            </tr>
          </tfoot>
        </table>
      </div><!--/table-responsive-->
    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div>


<div class="modal fade" div-modal-content id="modalCrud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 50%;">
      <div class="modal-content" id="div-modal-content">
      </div><!--/modal-content--> 
    </div><!--/modal-dialog--> 
</div><!--/modal-fade--> 

<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  panel default red_border horizontal_border_1">
      <div class="modal-body"> 
        <div class="row">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header theme_color">&nbsp;Eliminar Maestro</h3>
            </div>
            <div class="porlets-content" style="margin-bottom: -50px;">
              <h4>¿Esta segúro que desea eliminar el Maestro</h4>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div>
      </div>
      <div class="modal-footer" style="margin-top: -10px;">
        <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
          <form action="?c=Maestro&a=Eliminar" enctype="multipart/form-data" method="post">
            <input type="hidden" name="idMaestro" id="txtIdMaestro">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </div>
      </div>
    </div><!--/modal-content--> 
  </div><!--/modal-dialog--> 
</div><!--/modal-fade--> 
<script>



  eliminarMaestro = function(idMaestro){
  
    $('#txtIdMaestro').val(idMaestro);  
  };
</script>

