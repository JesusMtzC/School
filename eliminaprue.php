<?php
    include("conexion.php");
    if (isset($_REQUEST['datos'])) {
        $id=$_REQUEST['id'];
        $comentario=$_REQUEST['comentario'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
         <div class="container">
          <a class="navbar-brand" href="#"><img height="32px" width="32px" src="./img/esc.png" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-3 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link " aria-current="page" href="../BASES/index.php" >Inicio</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../BASES/academia.php">Academia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../BASES/Escolar.php">Academia</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Plantel
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../BASES/directivos.php">Directivos</a></li>
                    <li><a class="dropdown-item" href="../BASES/contactos.php">Contactos</a></li>
                    <li><a class="dropdown-item" href="../BASES/anuncios.php">Anuncios</a></li>
                    <li><a class="dropdown-item" href="../BASES/Calificaciones.php">Calificaciones</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
   </header><br>
   <section>
       <h3  class="text-center">Actualiza tu anuncio</h3>
   </section>
   <form action="edita.php?id=<?php echo $id;?>&comentario=<?php echo $id;?>" method="POST">
        <h3 class="text-center">¡Comencemos!</h3> <br>
        <section class="text-center anun">
        <div>
        <textarea rows="4" cols="40" name="comentario" placeholder="<?php echo $comentario ?>" value="<?php echo $comentario; ?>"></textarea>
        </div><br>
        <input  class="btn btn-warning" name="update" type="submit" value="Actualiza">
        </section>
    </form>
    















</body>
</html>