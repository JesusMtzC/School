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
<body class="prime">
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
                    <a class="nav-link" href="Escolar.php">Academia</a>
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

   <div>
       <section>

       </section>
   </div>

   <form class=" container forma" action="guardar1.php" method="POST">
       <h2 class="text-center"> Registro</h2>
       <div class="fiel">
        <label for="num" class="form-label">Num#:</label>
        <input type="text"  class="form-control" id="num" name="num" placeholder="Numero de lista">
      </div>
       <div class="fiel">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" aria-label="First name">
       </div>
       <div class="fiel">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" aria-label="Last name">
      </div>
      
      <div class="row ">
            <div class="fielfocus">
                <label for="español">Español</label>
                <select class="form-select form-control" id="español" name="español">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
            <div class="fielfocus">
                <label for="matematicas">Matematicas</label>
                <select class="form-select form-control" id="matematicas" name="matematicas">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
      </div>
      <div class="row  ">
            <div class="fielfocus">
                <label for="fisica">Fisica</label>
                <select class="form-select form-control" id="fisica" name="fisica">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
            <div class="fielfocus">
                <label for="historia">Historia</label>
                <select class="form-select form-control" id="historia" name="historia">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
      </div>
     <div class="row">
            <div class="fielfocus">
                <label for="ingles">Ingles</label>
                <select class="form-select form-control" id="ingles" name="ingles">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
            <div class="fielfocus">
                <label for="social">Social</label>
                <select class="form-select form-control" id="social" name="social">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
            </div>
      </div>
      <div class="fielfocus">
                <label for="deportes">Deportes</label>
                <select class="form-select form-control" id="deportes" name="deportes">
                <option selected>...</option>
                <option value="1">10</option>
                <option value="2">9</option>
                <option value="3">8</option>
                </select>
      </div>

      <br>
      <button type="submit" name="guardar-tak" class="btn btn-success tamañobtn">Enviar</button>
   </form><br>

























   <br>
    <footer class="blockquote-footer " >
        Derechos Reservados &copy; 2021<br>
        Diseñado por:--------<br>
        Email:
    </footer>
    


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="js/bootstrap.min.js"></script> 
    
</body>
</html>