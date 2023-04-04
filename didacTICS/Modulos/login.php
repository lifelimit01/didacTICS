<?php

if (isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "didactic´s");

    // check if credentials are okay, and email is verified
    $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0)
    {
        die("No se encuentra el Email");
    }

    $user = mysqli_fetch_object($result);

    if (!password_verify($password, $user->password))
    {
        die("Contraseña Incorrecta");
    }

    if ($user->email_verified_at == null)
    {
        die("Por Favor Verifique su correo <a href='email-verification.php?email=" . $email . "'>Aquí</a>");
    }

    echo "<p>Your login logic here</p>";
    exit();
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

    <title>Inicia Sesión</title>
</head>
<body>
<!-- 
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
        <li  class="breadcrumb-item active">Inicio de Sesión</li>
    </ul>

     -->

    



    <form class="form" method="POST">
        <h2 class="form_title">Inicia Sesión</h2>
        <p class="form__paragraph">¿Aún no tienes una cuenta? <a href="register.php" class="form__link">Entra aquí</a> </p>
        
        
        <div class="form__container">
            <div class="form__group">
                <input type="email" name="email" class="form__input" placeholder="Correo Electrónico" required>
                <!-- <label for="name" class="form__label">Correo: </label> -->
                <span class="form__line"></span>    
            </div>

            <div class="form__group">
                <input type="password" name="password" class="form__input" placeholder="Contraseña" required>
                <label for="name" class="form__label">Contraseña: </label>
                <span class="form__line"></span>    
            </div>

            <input type="submit" name="login" value="Login" >
        </div>
    </form>


</body>
</html>





<!-- <form method="POST">
    <input type="email" name="email" placeholder="Enter email" required />
    <input type="password" name="password" placeholder="Enter password" required />

    <input type="submit" name="login" value="Login"> -->
</form>