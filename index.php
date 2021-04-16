<?php include("conexion.php");?>
<?php include("guardar.php");?>
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
       <a class="navbar-brand" href="#"><img height="32px" width="32px" src="./img/esc.png" ></a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-3 mb-lg-0 ">
           <li class="nav-item ">
             <a class="nav-link active" aria-current="page" href="#" >Inicio</a>
             </li>
               <li class="nav-item">
                 <a class="nav-link" href="academia.php">Academia</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="academia.php">Escolar</a>
              </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Plantel
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="directivos.html">Directivos</a></li>
                 <li><a class="dropdown-item" href="contactos.php">Contactos</a></li>
                 <li><a class="dropdown-item " href="anuncios.php">Anuncios</a></li>
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
        <h1 class="display-4 h1"> Escuela TEC</h1>
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
   <section class=" container-sm">
     <div class="row">
       <section class="  col-md-9">
          <article class="post clearfix"></article>
          <h2 class="post-title h2">Escuela tecnica num 22</h2>
          
            <!-- carrusel -->
             <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-slide-to="2">
                <div class="carousel-indicators ">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                 </div>
                   <div class="carousel-inner ">
                     <div class="carousel-item active">
                        <img src="carrusel/img1.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="carrusel/img2.jpg" class="d-block w-100" alt="...">
                     </div>
                       <div class="carousel-item">
                         <img src="carrusel/img3.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                        <img src="carrusel/img4.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="carrusel/img5.jpg" class="d-block w-100" alt="...">
                      </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div><br>

            <div class="dosw">
              <p>
                Los términos educación superior, enseñanza superior, estudios superiores, educación profesional y educación terciaria aluden a la última etapa del proceso de aprendizaje académico, es decir, a todas las trayectorias formativas post-secundarias que cada país contempla en su sistema. Se imparte en las universidades, en las academias superiores o en las instituciones de formación profesional superior, entre otros.
  
                Es un paso posterior a la educación secundaria, y es común, aunque no imprescindible, que exista una selección de acceso a las instituciones de enseñanza superior basada en el rendimiento escolar durante la etapa secundaria o en un examen de acceso a la universidad. Según el país, este examen puede ser de ámbito estatal, local o propio de cada universidad.
              </p>
              <br><br>
            </div>
        </section>

        <aside class="col-md-3 d-sm-none d-md-block ">
          <h3>Anuncios</h3>
          <div >
           
            <table class="table table-warning table-striped">
              <thead>
                <tr>
                  <th scope="col fs-5">Anuncios importantes</th>
                  <th scope="col">Edicion</th>
                <tr>
              </thead>
              <tbody>
              <?php 
                $query = "SELECT * from anuncios";
                $result_tasks =mysqli_query($conn,$query); 
                while($row = mysqli_fetch_array($result_tasks)) { ?>
                <tr>
                  <td scope="row"><?php echo $row['comentario'] ?></td>
                  <td>
                      <a href="eliminaprue.php?id=<?php echo $row['comentario']?>"><img src="img/edit.png" alt="" width="30"/></a>
                      <a href="borra.php?id=<?php echo $row['comentario']?>"><img src="img/basura.png"  width="32"/></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           
          </div>

          <div class="list-group">
            <a href="#" class="list-group-item active list-group-item-action disabled" aria-current="page">
              Enlaces de clases
            </a>
            <a href="https://meet.google.com/ovi-csxi-xcc" class="list-group-item list-group-item-action ">Primero "A"</a>
            <a href="https://meet.google.com/ovi-csxi-xcc" class="list-group-item list-group-item-action">Primero "B"</a>
            <a href="#" class="list-group-item list-group-item-action">Segundo "A"</a>
            <a href="#" class="list-group-item list-group-item-action">Segundo "B"</a>
            <a href="#" class="list-group-item list-group-item-action">Tercero "A"</a>
            <a href="#" class="list-group-item list-group-item-action">Tercero "B"</a>
          </div>         
        </aside>
      </div>
   </section>






    <!-- Pie de pagina -->
    <div>
    <footer class="blockquote-footer " >
        Derechos Reservados &copy; 2021<br>
        Diseñado por:--------<br>
        Email:
    </footer>
    </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script >
      
    </script>
</body>
</html>