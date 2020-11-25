<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/estilos.css"><link rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />

<title>Portafolio</title>
</head>
<body style="overflow-x: hidden">
<!-- MENU -->
<div class="row">
  <div class="col-3">
    <img id="logo" src="recursos/img/Recurso 3.png" class="img-fluid">
  </div>
  <div class="col-lg-6 col-sm-9 mt-lg-5">
    <ul class="nav justify-content-center main-menu" id="main-menu">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trabajos.html">Trabajos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link activo" href="contacto.html">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cv.html">CV</a>
      </li>
      
    </ul>
    
    </div>
</div>
<!-- MENU -->
  
<!-- CONTACTO -->
<div class="container">
  <div class="contact">
    <div class="row">
      <div class="col-lg-12">
        <h1>Trabajemos juntos ahora!</h1>
        <h3>contactame para <span class="infoNegro">ayudarte</span> en tu proyecto o ser parte de tu <span class="infoNegro">equipo</span></h3>
      </div>
    </div>
  </div>
</div>

<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="col-lg-4 text-center">
      <box-icon name='current-location' color='#ffffff'></box-icon>
      <p class="infoIconos">Colonia las palmas
        pasaje las flores 25</p>
    </div>
    <div class="col-lg-4 text-center">
      <box-icon name='phone' type='solid' color='#ffffff' ></box-icon>
      <p class="infoIconos">22821932</p>
    </div>
    <div class="col-lg-4 text-center">
      <box-icon name='mail-send' color='#ffffff'></box-icon>
      <p class="infoIconos">raudamejia2014@hotmail.com</p>
    </div>
  </div>
</div>

<div class="container">
  <form action="enviar.php" method="post">
    <div class="container form-contacto mt-4 mb-4 col-lg-6">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="TituloForm">Formulario de contacto</h1>
        </div>
        <div class="col-lg-6">
          <h1 class="textoDeForm">Nombre completo</h1>
          <input type="text" autocomplete="off" name="name" id="name" class="inputForm">
          <h1 class="textoDeForm">Email</h1>
          <input type="text" autocomplete="off" name="mail" id="mail" class="inputForm">
          <h1 class="textoDeForm">Telefono</h1>
          <input type="text" autocomplete="off" name="phone" id="phone" class="inputForm">
        </div>
        <div class="col-lg-6">
          <h1 class="textoDeForm">Asunto</h1>
          <textarea type="text" autocomplete="off" class="inputFormAsunto" name="message" id="message" cols="10" rows="5"></textarea>
        </div>
        <div class="col-lg-12 mt-3">
          <h1 class="TituloForm">Servicios</h1>  
        </div>
        <div class="col-lg-12 text-center">
          <button class="btnServicios">Diseño web</button>
          <button class="btnServicios">Desarrollo web</button>
          <button class="btnServicios">Diseño logo</button>
          <button class="btnServicios">Otros</button>
        </div>
        <div class="col-lg-12 text-center mt-2 mb-3">
          <button type="submit" name="enviar" class="btnSolicitar">Solicitar</button>
        </div>
      </div>
    </div>
  </form>
  <?php
    include("enviar.php")
  ?>
</div>

  <div class="container">
    <div class="row">
      <div class="text-center col-lg-12">
        <h1 class="Redestext">Sigueme en mis redes sociales para  <span class="infoNegro">más</span> contenido.</h1>
      </div>
      <div class="mx-auto">
          <a href="https://www.facebook.com/Daniel-Mej%C3%ADa-Dise%C3%B1ador-web-102357005014485/?modal=admin_todo_tour"target="_blank"> <box-icon type='logo'  size='md' color='#ffffff' name='facebook-square'></box-icon></a>
          <a href="https://www.instagram.com/danielmejia_disenadorweb/" target="_blank"> <box-icon name='instagram-alt' color='#ffffff' type='logo' size='md'></box-icon></a>
      </div>
    </div>
  </div>
   <!-- CONTACTO -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>