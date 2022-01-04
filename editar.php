<?php 
$conexion=mysqli_connect("localhost","root","","rol");
if(isset($_GET['id'])){
	$id=$_GET['id'];
	if(!is_numeric($id)){//is_numeric valida si es la variable es un numero
		die("El id es incorrecto");
	}
	$consulta="SELECT * FROM usuarios WHERE id=$id";
	$resultado=mysqli_query($conexion,$consulta);
	$datos=mysqli_fetch_array($resultado);
	//var_dump($datos);

}
else{
	header("location: index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar cliente</title>
</head>
<body>
	<h2>Editar usuario</h2>
	<form action="crud.php" method="post">
		<p>Nombre: <input type="text" name="nombre" value="<?php echo($datos['nombre'])?>"></p>
		<p>Usuario: <input type="text" name="usuario" value="<?php echo($datos['usuario'])?>"></p>
		<p>Contraseña <input type="text" name="contraseña" value="<?php echo($datos['contraseña'])?>"></p>
		<p>Id rol <input type="text" name="id_cargo" value="<?php echo($datos['id_cargo'])?>"></p>
		<input type="hidden" name="id" value="<?php echo $id ?>"><!--hidden significa escondido-->
		<input type="submit" name="editar" value="Guardar">
	</form>
</body>
</html>