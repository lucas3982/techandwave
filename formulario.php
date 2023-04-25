<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>

<!--swiper link css--> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>   

<!--link font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!--link css-->
<link rel="stylesheet" href="css/style.css">


</head>
<body>
<!--header section-->
<section class="header">
    <a href="inicio.php" class="logo">TechandWeb</a>
    <nav class="navbar">
        <a href="inicio.php">Inicio</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="proyectos.php">Proyectos</a>
        <a href="formulario.php">Formulario</a>
        <a href="contacto.php">Contacto</a>
    </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!--header section fin-->

<div class="titulo" style="background: url(img/img4.jpg) no-repeat">
    <h1>Formulario</h1>
</div>

<section class="servicios">
    <h1 class="titulo">Agenda una Reunion</h1>
    <div class="box-container">
        <div class="box">
            <img src="img/icono1.png" alt="">
            <h3>Diseños a tu medida</h3>
        </div>
        <div class="box">
            <img src="img/icono2.png" alt="">
            <h3>Soporte</h3>
        </div>
        <div class="box">
            <img src="img/icono3.jpg" alt="">
            <h3>Diseños Responsive</h3>
        </div>
        <div class="box">
            <img src="img/icono4.jpg" alt="">
            <h3>Servicios de Hosting</h3>
        </div>
        <div class="box">
            <img src="img/icono5.png" alt="">
            <h3>Bases de Datos</h3>
        </div>
        <div class="box">
            <img src="img/icono5.png" alt="">
            <h3>Bases de Datos</h3>
        </div>
    </div>
    <a href="nosotros.php" class="btn">Crear Reunion</a>

    <form action="reservar.php" method="post">
  <label for="fecha">Fecha:</label>
  <input type="date" id="fecha" name="fecha" required><br>

  <label for="hora">Hora:</label>
  <input type="time" id="hora" name="hora" required><br>

  <label for="personas">Número de personas:</label>
  <input type="number" id="personas" name="personas" min="1" max="10" required><br>

  <label for="nombre">Nombre completo:</label>
  <input type="text" id="nombre" name="nombre" required><br>

  <label for="email">Correo electrónico:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="telefono">Teléfono:</label>
  <input type="tel" id="telefono" name="telefono" required><br>

  <input type="submit" value="Reservar">
</form>

    
</section>
    











<!--section footer principio-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Enlaces Rapidos</h3>
            <a href="inicio.php"><i class="fas fa-angle-right"></i> Inicio</a>
            <a href="nosotros.php"><i class="fas fa-angle-right"></i>Nosotros</a>
            <a href="proyectos.php"><i class="fas fa-angle-right"></i>Proyectos</a>
            <a href="formulario.php"><i class="fas fa-angle-right"></i>Formulario</a>
            <a href="contacto.php"><i class="fas fa-angle-right"></i>Contacto</a>
        </div>

        <div class="box">
            <h3>Contacto</h3>
            <a href="inicio.php"><i class="fas fa-phone"></i> +54 9 221-4383206</a>
            <a href="nosotros.php"><i class="fas fa-phone"></i> +54 9 221-6312231</a>
            <a href="proyectos.php"><i class="fas fa-envelope"></i>info@techandweb.com.ar</a>
        </div>

        <div class="box">
            <h3>Seguinos</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>

    <div class="creado">Creado por <span>TechandWeb</span> | Todos los derechos reservados.</div>
</section>
<!--section footer fin-->


<!--swiper link js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!--link js-->
<script src="js/main.js"></script>
</body>
</html>