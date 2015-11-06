<?php
include ('connectDB.php');

$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$idCliente = 11;

$stmt= $connectionDB->prepare("INSERT INTO clientes (idCliente,dni,nomYAp,telefono,usuario,contrasena) VALUES (?,?,?,?,?,?)");
$stmt->bind_param('iisiss',$idCliente,$dni,$nombre,$telefono,$usuario,$clave);
$stmt->execute();
echo "Registro correcto";
?>