<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techandwave</title>
    <link rel="icon" href="img/Techandwave logo.png">

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
    <a href="inicio.php" class="logo">Techandwave</a>
    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="proyectos.php">Proyectos</a>
        <!--<a href="formulario.php">Formulario</a>-->
        <a href="contacto.php">Contacto</a>
    </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!--header section fin-->

<div class="titulo" style="background: url(img/favicon.jpg) no-repeat">
    <h1>Contacto</h1>
</div>

<!--seccion contacto inicio-->
<section class="contact">
    <h1 class="titulo">
        <span>C</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>a</span>
        <span>n</span>
        <span>o</span>
        <span>s</span>
    </h1>
    <div class="row">
        <div class="image">
            <img src="img/contacto.jpg" alt="">
        </div>
        <form action="enviar.php" method="post">
            <div class="inputBox">
                <input type="text" name="nombre" required="" placeholder="Nombre Completo">
                <input type="email" name="correo" required="" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="text" name="telefono" required="" placeholder="Telefono">
                <input type="text" name="asunto" placeholder="Asunto">
            </div>
            <textarea placeholder="mensaje" name="mensaje" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="enviar" >
        </form>
    </div>
</section>


<!--seccion contacto fin-->


<!--section footer principio-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Enlaces Rapidos</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> Inicio</a>
            <a href="nosotros.php"><i class="fas fa-angle-right"></i>Nosotros</a>
            <a href="proyectos.php"><i class="fas fa-angle-right"></i>Proyectos</a>
            <!--<a href="formulario.php"><i class="fas fa-angle-right"></i>Formulario</a>-->
            <a href="contacto.php"><i class="fas fa-angle-right"></i>Contacto</a>
        </div>

        <div class="box">
            <h3>Contacto</h3>
            <a href="https://wa.me/+5492214383206?text=Hola,%20queria%20consultar%20por%20un%20sitio%20web."><i class="fas fa-phone"></i> +54 9 221-4383206</a>
            <a href="https://wa.me/+5492216312231?text=Hola,%20queria%20consultar%20por%20un%20sitio%20web."><i class="fas fa-phone"></i> +54 9 221-6312231</a>
            <a href="https://webmail.izel.com.ar/?_task=mail&_mbox=INBOX"><i class="fas fa-envelope"></i>contactanos@techandwave.com</a>
        </div>

        <div class="box">
            <h3>Seguinos</h3>
            <a href="https://www.facebook.com/profile.php?id=100092287802035"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="https://www.instagram.com/techandwave/"><i class="fab fa-instagram"></i>instagram</a>
            <a href="https://www.linkedin.com/company/techandwave"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>

    <div class="creado">Creado por <span>Techandwave</span> | Todos los derechos reservados.</div>
</section>
<!--section footer fin-->


<!--swiper link js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!--link js-->
<script src="js/main.js"></script>
</body>
</html>