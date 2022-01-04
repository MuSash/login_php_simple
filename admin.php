<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    if(!is_numeric($id)){
        die("Error al eliminar");
    }
    $consulta="DELETE FROM `usuarios` WHERE id=$id";
    $conexion=mysqli_connect("localhost","root","","rol");
    $resultado=mysqli_query($conexion,$consulta);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hola admin</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>ID de cargo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>   
    <?php 
    $conexion=mysqli_connect("localhost","root","","rol");

    $consulta="SELECT * FROM usuarios";
    $resultado=mysqli_query($conexion,$consulta);
    $table='';
    while($row=mysqli_fetch_array($resultado)){
        $table=$table."<tr>";
        $table=$table."<td>$row[id]</td>";
        $table=$table."<td>$row[nombre]</td>";
        $table=$table."<td>$row[usuario]</td>";
        $table=$table."<td>$row[id_cargo]</td>";
        $table=$table."<td><a href=\"editar.php?id=$row[id]\">Editar</a></td>";
        $table=$table."<td><a href=\"admin.php?id=$row[id]\">Eliminar</a></td>";
        $table=$table."</tr>";
        
    }
    echo $table;
     ?>
     </table>
</body>
</html>