<?php
//Campos del formulario
    $name = $_POST['name']; // Cada campo del formulario irá con $_POST['nombreDelCampo']
    $name = $_POST['email'];
    $name = $_POST['text'];
//Atributos del correo    
    $from = "info@nuriarivas.com"; // el email desde donde se envía, en tu caso será la cuenta de correo que hayas creado.
    $to = "nuriarivasbotello@gmail.com"; // Cuenta de correo a la que se te envía
    $subject = "Checking PHP mail"; // Asunto
    $message = "El nombre del formulario es " . $name; // El mensaje del correo, funciona igual que los strings de javascript, sólo que el lugar de poner + para juntar texto con variables, se usa el punto 
    $headers = "From:" . $from;


    @mail($to, $subject, $message, $headers);
    
    header('Location: index.html');
