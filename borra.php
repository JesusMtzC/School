<?php
include("conexion.php");

$comentario=$_GET['id'];

$sql="DELETE FROM anuncios WHERE comentario='$comentario'";
$query=mysqli_query($conn,$sql);
    if ($query){
        header("Location: index.php");
    }

?>