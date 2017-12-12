<?php
require_once 'model/maestro.php';

class MaestroController{

  private $model;
  public $error;

  //Constructor
  public function __CONSTRUCT(){
    $this->model = new Maestro();
  }
  //Index 
  public function Index(){
    $maestro=true; //variable cargada para activar la opcion municipios en el menu
   $page="view/maestro/index.php"; //Vista principal donde se enlistan los municipios
   require_once 'view/index.php';
 } 

public function Crud(){
 $maestro = new Maestro();
  
 if(isset($_REQUEST['idMaestro'])){
  $maestro = $this->model->Obtener($_REQUEST['idMaestro']);
  echo $this->model->idMaestro;
  
}

//$maestro=true;
$page="view/maestro/maestro.php";
require_once 'view/index.php';
}




public function Eliminar(){

  $maestro= new Maestro();
  $maestro->idMaestro = $_REQUEST['idMaestro'];
   echo $maestro->idMaestro;
  $maestro->estado='Inactivo';
  $this->model->Eliminar($maestro);


  $mensaje="Eliminacion exitosa";
  $page="view/maestro/index.php";
  require_once 'view/index.php';
  
}





public function Guardar(){
  $maestro= new Maestro();
  $maestro->idMaestro = $_REQUEST['idMaestro'];
  $maestro->claveMaestro = $_REQUEST['claveMaestro'];
  $maestro->nombre= $_REQUEST['nombre'];
  $maestro->apellidos = $_REQUEST['apellidos'];
  $maestro->departamento= $_REQUEST['departamento'];
  $maestro->estado = "Activo";


  if($maestro->idMaestro > 0){

    $this->model->Actualizar($maestro);
    $mensaje="Se han actualizado correctamente los datos de el Maestro";
  } else {
    $this->model->Registrar($maestro);
    $mensaje="Se ha registrado correctamente los datos de el Maestro";
  } 


  $maestro = true;

  $page="view/maestro/index.php";
  require_once 'view/index.php';
}



}
