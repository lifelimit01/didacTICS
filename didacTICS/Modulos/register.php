<?php
// Variables  Globales para PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

if (isset($_POST["register"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Creación de la instancia
    $mail = new PHPMailer(true);

    try {
    
    //Depuración detallada
    $mail->SMTPDebug = 0;

    //enviar  usando SMPT
    $mail->isSMTP();

    //Proporcionar host de correo (gmail en este caso)
    $mail->Host = 'smtp.gmail.com';

    //Habilitar la autenticación SMPT
    $mail->SMTPAuth = true;

    //Permitir el acceso a la cuenta gmail
    $mail->Username = 'sertecsj75@gmail.com';
    $mail->Password = 'zhldwfuhokvnzhpl';
    
    //Habilitar cifrado TLS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Puerto para conectar PHPMailer
    $mail->Port = 587;

    //Quién envía el correo
    $mail->setFrom('sertecsj75@gmail.com', 'DidacTICS');

    //Destinatario
    $mail->addAddress($email, $name);

    //Establecer el formato HTML para el envio del correo
    $mail->isHTML(true);

    //Generar código de verificación
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    
    //Correo

    $mail->Subject = 'Verifica tu Correo';
    $mail->Body = '<p>Su código de verificación es: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

    $mail->send();
    echo 'Ya casi eres parte de esta gran comunidad, revisa tu correo electrónico y verifica tu cuenta';

    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    //conexión con la Base de Datos (crear un archivo de conexión más adelante)
    $conn = mysqli_connect("localhost", "root", "", "didactic´s");
    
    //Insertar en la tabla users
    $sql = "INSERT INTO users(name, email, password, verification_code, email_verified_at) VALUES ('" . $name . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', NULL)";
    mysqli_query($conn, $sql);

    header("Location: email-verification.php?email=" . $email);
    exit();
    } catch (Exception $e){
        echo "No se pudo envíar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Recursos_Pagina/css/estilos_sesion.css">

    <title>Registrar</title>
</head>
<body>
<!-- 
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
        <li  class="breadcrumb-item active">Inicio de Sesión</li>
    </ul>

     -->

    



    <form class="form" method="POST">
        <h2 class="form_title">Registrate</h2>
        <p class="form__paragraph">¿Ya tienes una cuenta? <a href="login.php" class="form__link">Entra aquí</a> </p>
        
        
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="name" class="form__input" placeholder="Nombre" required>
                <label for="name" class="form__label">Nombre: </label>
                <span class="form__line"></span>    
            </div>

            <div class="form__group">
                <input type="email" name="email" class="form__input" placeholder="Correo Electrónico">
                <label for="name" class="form__label">Correo: </label>
                <span class="form__line"></span>    
            </div>

            <div class="form__group">
                <input type="password" name="password" class="form__input" placeholder="Contraseña">
                <label for="name" class="form__label">Contraseña: </label>
                <span class="form__line"></span>    
            </div>

            <input type="submit" name="register" value="Registrar" >
        </div>
    </form>


</body>
</html>