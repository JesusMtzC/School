<?php
    include("conexion.php");
    if (isset($_POST['guardar-tak'])) {
        $num=$_POST['num'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $español=$_POST['español'];
        $matematicas=$_POST['matematicas'];
        $fisica=$_POST['fisica'];
        $historia=$_POST['historia'];
        $ingles=$_POST['ingles'];
        $social=$_POST['social'];
        $deportes=$_POST['deportes'];

        //echo $num;
        //echo $nombre;
        $query="INSERT INTO registro1(num, nombre, apellidos, español, matematicas, fisica, historia, ingles, social, deportes) values ('$num','$nombre','$apellidos','$español','$matematicas','$fisica','$historia','$social', '$ingles','$deportes')";
        $result=mysqli_query($conn,$query);
        if (!$result) {
            die("query failed");
        }
        //echo "guardando en bd";
        header("Location:calificaciones.php");

    }

?>