 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Maestro</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=asentamiento">Maestro</a></li>
      <li class="active"><?php echo $maestro->idMaestro != null ? 'Actualizar Maestro' : 'Alta Maestro'; ?></li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;"><?php echo $maestro->idMaestro != null ? '&nbsp; Actualizar Maestro' : '&nbsp; Registrar Maestro'; ?></h2> 
            </div>
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions"> 
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="porlets-content">
          <form action="?c=Maestro&a=Guardar" method="post" class="form-horizontal row-border" parsley-validate novalidate>
            <input  name="idMaestro"  value="<?php echo $maestro->idMaestro != null ? $maestro->idMaestro : 0;  ?>"/>

            <div class="form-group">
              <label class="col-sm-3 control-label">Clave del Maestro<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input name="claveMaestro" maxlength="12" parsley-rangelength="[1,12]"  value="<?php echo $maestro->claveMaestro;?>" type="text" class="form-control" required placeholder="Ingrese clave del maestro" />
              </div>
            </div><!--/form-group-->

             <div class="form-group">
              <label class="col-sm-3 control-label">Nombre(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input name="nombre" maxlength="50" parsley-rangelength="[1,50]" onkeypress=" return soloLetras(event);" onkeyup="mayus(this);" onchange="mayus(this);"  value="<?php echo $maestro->nombre;?>" type="text" class="form-control" required placeholder="Ingrese el nombre del maestro" />
              </div>
            </div><!--/form-group-->


            <div class="form-group">
              <label class="col-sm-3 control-label">Apellido(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input name="apellidos" maxlength="50" parsley-rangelength="[1,50]" onkeypress=" return soloLetras(event);" onkeyup="mayus(this);" onchange="mayus(this);"  value="<?php echo $maestro->apellidos;?>" type="text" class="form-control" required placeholder="Ingrese apellidos del maestro" />
              </div>
            </div><!--/form-group-->

                  <div class="form-group">
              <label class="col-sm-3 control-label">Departamento<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input name="departamento" maxlength="24" parsley-rangelength="[1,15]" onkeypress=" return soloLetras(event);" onkeyup="mayus(this);" onchange="mayus(this);"  value="<?php echo $maestro->departamento;?>" type="text" class="form-control" required placeholder="Ingrese Departamento del maestro" />
              </div>
            </div><!--/form-group-->



            <div class="form-group">
              <div class="col-sm-offset-7 col-sm-5">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="?c=maestro" class="btn btn-default"> Cancelar</a>
              </div>
            </div><!--/form-group-->
          </form>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div><!--/container clear_both padding_fix-->