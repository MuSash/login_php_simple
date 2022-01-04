<?php 

if(!isset($_POST)){
	die("Acceso denegador ");
}

$conexion=mysqli_connect("localhost","root","","rol");

if(isset($_POST['editar'])){
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	$id_cargo=$_POST['id_cargo'];

	$consulta="UPDATE usuarios SET `nombre`='$nombre',`usuario`='$usuario',`contraseña`='$contraseña',`id_cargo`='$id_cargo' WHERE id=$id";
	$resultado=mysqli_query($conexion,$consulta);		
		header("location:admin.php");
}

 ?>
