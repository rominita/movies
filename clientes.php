<?php

class Cliente{
  private $idCliente;
  private $dni;
  private $nomYAp;
  private $telefono;
  const TABLA = 'clientes';

  public function __construct( $idCliente=null,$dni,$nomYAp,$telefono){
    $this->idCliente = $idCliente;
    $this->dni  = $dni;
    $this->nomYAp = $nomYAp;
    $this->telefono = $telefono;
  }

  public function getidCliente(){
  	return $this->idCliente;
  }


  public function getDni(){
    return $this->dni;
  }

  public function getnomYAp(){
    return $this->nomYAp;
  }

  public function getTelefono(){
    return $this->telefono;
  }

  public function setDni($dni) {
    $this->dni = $dni;
 }

  public function setNomYAp($nomYAp) {
    $this->nomYAp= $nomYAp;
     } 

  public function setTelefono($telefono) {
    $this->telefono = $telefono;
     }

  //public function guardar(){
  	 //	$conexion = new Conexion();
  	 	//$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (dni, nomYAp, telefono) VALUES(:dni, :nomYAp, :telefono)');
        //  $consulta->bindParam(':dni', $this->dni);
          //$consulta->bindParam(':nomYAp', $this->nomYAp);
         // $consulta->bindParam(':telefono', $this->telefono);
        //  $consulta->execute();
        //  $this->id = $conexion->lastInsertId();
  //}//

	}

?>
