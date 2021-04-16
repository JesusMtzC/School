<?php
    include("conexion.php");

    $comentario=$_POST['comentario'];

    $sql="UPDATE anuncios SET comentario='$comentario' WHERE comentario='$comentario'";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        header("Location:index.php");
    }
?>