<?php

class Pelicula{
	private $idPelicula;
	private $titulo;
	private $descripcion;
	private $categoria;
	const TABLA = 'Peliculas';

	public function __construct( $idPelicula=null,$titulo,$descripcion,$categoria){
		$this->idPelicula = $idPelicula;
		$this->titulo  = $titulo;
		$this->descripcion = $descripcion;
		$this->categoria = $categoria;
	}

	public function getIdPelicula(){
		return $this->idPelicula;
	}


	public function getTitulo(){
		return $this->titulo;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setTitulo($titulo) {
	    $this->titulo = $titulo;
	   }

	public function setDescripcion($descripcion) {
	    $this->titulo = $descripcion;
	   } 

	public function setCategoria($categoria) {
	    $this->categoria = $categoria;
	   }

	   
   	}

?>
