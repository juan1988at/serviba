  <!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<header>
    <NAV class="contenedor-flex-1">
        <A href="index.html"><ImG src ="LO.PNG"style=width:200px;height:100px;/A>
        <ul>
            <li><a href="index.html">INICIO</a></li>
            <li><a href="NOSOTROS.php">NOSOTROS</a></li>
            <li><a href="contacto.php">CONTACTO</a></li>
            
        </ul>
    </NAV>
</header> 
<body>
<section id="banner">
    <div class="ancho-contenido-banner">
        <h1> ¿Quieres que tus clientes te busquen en la WEB?</h1>
        
    </div>
</section>
<section class="espacio-seccion">
    <DIV class="seccion-nosotros-1"><SPAN>Dejanos tus datos</SPAN></DIV>
    <DIV class="seccion-nosotros-2"><SPAN>!ES HORA DE HACER ALGO INCREIBLE!</SPAN></DIV>
    <DIV class="contenedor-formulario">

    <form method="post" class="formulario">>
    	 <h3>Completa los datos y recibe informacion</h3>
            <DIV>
                <input type="text" name="name"  placeholder="name">
            </DIV>
            <DIV> <input type="email" name="email"  placeholder="email">
            </DIV>
            <DIV> <input type="text" name="horario" placeholder="horario">
            </DIV>
            <DIV> <input type="text" name="redes" placeholder="redes">
            </DIV>
            <DIV><input type="text" name="contacto" placeholder="contacto">
            </DIV>
            <DIV> <input type="text" name="negocio" placeholder="negocio"></DIV>
            <div>                <button class="boton" type="submit" name="register"  >ENVIAR </button></div>
     </form>
        <?php 
        include("registrar.php");
        ?>
        </section>
        <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <i class="fs-5 px-3  pt-3">SERVICIOSDEBARRIO.COM &copy; Todos Los Derechos Reservados 2021</I>
  <div id="iconos" >
      <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="bi bi-twitter"></i></a>
      <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

</body>
</html>

       
    
            
