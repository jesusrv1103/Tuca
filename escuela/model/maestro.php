<?php
require_once 'model/database.php';
class Maestro
{
  private $pdo;
  public $idMaestro;
  public $claveMaestro;
  public $nombre;
  public $apellidos;
  public $departamento;
  public $estado;

  public function __CONSTRUCT()
  {
    try
    {
      $this->pdo = Database::StartUp();     
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
  public function Listar()
  {
    try
    {
      //$result = array();

      $stm = $this->pdo->prepare("SELECT * FROM Maestro where estado='Activo'");
      $stm->execute();

      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }

  public function Obtener($id)
  {
    try 
    {
      $stm = $this->pdo
      ->prepare("SELECT * FROM Maestro WHERE idMaestro = ?");


      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) 
    {
      die($e->getMessage());
    }
  }


  public function Eliminar($data)
  {
   try 
    {
      $sql = "UPDATE Maestro SET 
      estado = ?
      WHERE idMaestro = ?";

      $this->pdo->prepare($sql)
      ->execute(
        array(
          $data->estado,
          $data->idMaestro
          
        )
      );
    } catch (Exception $e) 
    {
      die($e->getMessage());
    }
  }
  public function Actualizar(Maestro $data)
  {
    try 
    {
      $sql = "UPDATE Maestro SET 
      claveMaestro = ?,
      nombre= ?, 
      apellidos =?, 
      departamento= ?
      WHERE idMaestro = ?";

      $this->pdo->prepare($sql)
      ->execute(
        array(
          $data->claveMaestro,
          $data->nombre,
          $data->apellidos, 
          $data->departamento,
          $data->idMaestro
          )
        );
    } catch (Exception $e) 
    {
      die($e->getMessage());
    }
  }
  //Metdod para registrar
  public function Registrar(Maestro $data)
  {
    try 
    {
      $sql = "INSERT INTO Maestro(claveMaestro,nombre,apellidos,departamento,estado)
      VALUES (?,?,?,?,?)";

      $this->pdo->prepare($sql)
      ->execute(
        array(
          $data->claveMaestro,
          $data->nombre,
          $data->apellidos,
          $data->departamento, 
          $data->estado,
          
          )
        );
    } catch (Exception $e) 
    {
      die($e->getMessage());
    }
  }
}