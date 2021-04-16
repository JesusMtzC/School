<?php include("conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
         <div class="container">
          <a class="navbar-brand" href="#"><img height="32px" width="32px" src="img/esc.png" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-3 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link " aria-current="page" href="index.php" >Inicio</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="academia.php">Academia</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="Escolar.php">Escolar</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Plantel
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="directivos.php">Directivos</a></li>
                    <li><a class="dropdown-item" href="contactos.php">Contactos</a></li>
                    <li><a class="dropdown-item" href="anuncios.php">Anuncios</a></li>
                    <li><a class="dropdown-item" href="Calificaciones.php">Calificaciones</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>
      
        <section class="jumbotron  navbar-dark navbar-toggler"> 
           <div class="container-xl">
              <h1 class="display-4"> School TEC</h1>
              <div>
                <ul class="navbar-nav ms-auto list-group-horizontal ">
                  <li class=><a href="https://es-la.facebook.com/"><img  src="img/facebook.png" height="32px" width="32px" alt=""></a></li>
                  <li class=><a href="#"><img src="img/yout.png" height="32px" width="32px" alt=""></a></li>
                  <li class=><a href="#"><img src="img/insta.png" height="32px" width="32px" alt=""></a></li>
                  <li class=><a href="#"><img src="img/correo.png" height="32px" width="32px" alt=""></a></li>
                  <li class=><a href="#"><img src="img/fon.png" height="32px" width="32px" alt=""></a></li>
               </ul>
             </div>
           </div>
       </section>
       <section>
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #7dc0f0;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="directivos.php">Directivos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contactos.php">Contactos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="anuncios.php">Anuncios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Calificaciones.php">Calificaciones</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
       </section>
       <section class=" main container">
           <div class="row">
               <section class=" posts col-md-9">
                   <article class="postt clearfix text-center">
                       <h2 class="text-center"> Anuncios Esolares</h2>
                       <p class="text-center">Bienvenido Profesor este espacio fue creado para que publiques algún comunicado o anuncio para tus alumnos</p>
                   </article>
               </section>
              <div>
                <form action="guardar.php" method="POST">
                   <h3 class="text-center">¡Comencemos!</h3> <br>
                  <section class="text-center anun">
                    <div>
                    <textarea name="comentario" rows="4" cols="40" placeholder="Escribe tu anuncio"></textarea>
                    </div>
                    <input  class="btn btn-success" type="submit" name="save-taks" value="Enviar">
                  </section>
                </form>
              </div>
           </div>
       </section>
       <br><br>


       <div>
          <footer class="blockquote-footer " >
              Derechos Reservados &copy; 2021<br>
              Diseñado por:--------<br>
              Email:
          </footer>
       </div>
    


       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>