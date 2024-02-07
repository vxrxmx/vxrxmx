<?php 
header("../registro/loguearse.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="style1.css">
</head>
<form method="post">
<body>
    <form action="index.php" autocomplete="off" method="post">
        <img src="logo.jpeg" alt="logo.jpeg">
        <h2 style="color: #673ab7;">Iniciar Sesión</h2>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" class="btn btn-success" value="Ingresar">
        <a href="Registrar.php" class="link-none">¿No tienes cuenta? <span>Registrate aquí.</span></a>
        
    </form>
</body>
</html>
