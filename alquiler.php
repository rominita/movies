<?php

class Alquileres{
   private $idAlquiler;
   private $dniCliente;
   private $cantPeliculas;
   private $precio;
   private $tiempoAlquiler;
   private $nroTarjeta;
   const TABLA = 'alquileres';

   public function __construct( $idAlquiler=null,$dniCliente,$CantPeliculas,$Precio,$TiempoAlquiler,$NroTarjeta){
      $this->idAlquiler = $idAlquiler;
      $this->dniCliente  = $dniCliente;
      $this->CantPeliculas = $CantPeliculas;
      $this->Precio = $Precio;
      $this->TiempoAlquiler = $TiempoAlquiler;
      $this->$NroTarjeta = $NroTarjeta;
   }

   public function getIdAlquiler(){
   	return $this->idAlquiler;
   }

   public function getDniCliente(){
      return $this->dniCliente;
   }

   public function getCantPeliculas(){
      return $this->cantPeliculas;
   }

   public function getPrecio(){
      return $this->precio;
   }

   public function getTiempoAlquiler(){
      return $this->tiempoAlquiler;
   }

   public function getNroTarjeta(){
   	return $this->NroTarjeta;
   }

   public function setDniCliente($dniCliente) {
      $this->dniCliente = $dniCliente;
      }

   public function setCantPeliculas($CantPeliculas) {
      $this->cantPeliculas = $cantPeliculas;
      } 

   public function setPrecio($precio) {
      $this->precio = $precio;
      }

   public function setTiempoAlquiler($tiempoAlquiler) {
      $this->tiempoAlquiler = $tiempoAlquiler;
      }

   public function setNroTarjeta($nroTarjeta) {
      $this->nroTarjeta = $nroTarjeta;      
   }

?>
