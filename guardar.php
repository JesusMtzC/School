<?php
    include("conexion.php");
    if (isset($_POST['save-taks'])) {
        $comentario=$_POST['comentario'];

        //conectar base
        //echo $comentario;
        $query= "INSERT INTO anuncios(comentario) values('$comentario')";
        $result=mysqli_query($conn,$query);
        if (!$result) {
            die("query Failed");
        }
        //echo "echo guardando BD";
        header("Location:index.php");

    }


?>