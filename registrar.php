<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['horario']) >= 1 && strlen($_POST['redes']) >= 1 ) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $horario = trim($_POST['horario']);
        $redes = trim($_POST['redes']);
        $contacto= trim($_POST['contacto']);
        $negocio = trim($_POST['negocio']);
	    $fechareg = date("d/m/y");
        $consulta=  "INSERT INTO `datos`(`nombre`, `email`, `horario`, `redes`, `contacto`, `negocio`, `fecha_reg`) VALUES ('$name','$email','$horario','$redes','$contacto','$negocio','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>