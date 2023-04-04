<?php

if (isset($_POST["verify_email"]))
{
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    //Conexión a la Base de datos (crear un archivo de conexión a la base de datos más adelante)
    $conn = mysqli_connect("localhost", "root", "", "didactic´s");

    //Marcar el email como verificado
    $sql = "UPDATE users SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0)
    {
        die("El código de verificación falló.");
    }

    echo "<p>Puedes iniciar sesión.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Recursos_Pagina/css/estilos_sesion.css">

    <title>Verificación</title>
</head>
<body>

    <form class="form" method="POST">
        <h2 class="form_title">Verifica tu Correo</h2>

        <div class="form__container">
            <div class="form__group">
                <input type="hidden" name="email" class="form__input" value="<?php echo $_GET['email'];?>" required>   
            </div>

            <div class="form__group">
                <input type="text" name="verification_code" class="form__input" placeholder="Código de verificación" required > 
                <label for="name" class="form__label">Código de verificación </label>
                <span class="form__line"></span>    
            </div>

            <input type="submit" name="verify_email" value="Verificar Email" >
        </div>
        
    </form>


</body>
</html>