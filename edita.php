<?php
/*No eliminar se usa para editar el anuncio*/
    include("conexion.php");
    $comentario=$_REQUEST['comentario'];
    $id=$_REQUEST['id'];
    $sql="UPDATE anuncios SET comentario='$comentario' WHERE id='$id'";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        header("Location:index.php");
    }
?>