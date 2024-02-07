<?php
include("conexion.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Preparar la consulta SQL
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE Nombre = ?");
    $stmt->bind_param("s", $usuario);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Verificar contraseña
        $row = $result->fetch_assoc();
        if ($row['Contrasena'] == $contrasena) {
            echo "Inicio de sesión exitoso
            <script>window.location.href='index1.php';</script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Contraseña incorrecta');
                    window.location.href = 'index1.php';
                  </script>";
        }
    } else {
        echo "<script type='text/javascript'>
                alert('Usuario no encontrado');
                window.location.href = 'index1.php';
              </script>";
    }

    $stmt->close();
} else {
    echo "<script type='text/javascript'>
            alert('Por favor complete los campos');
            window.location.href = 'index1.php';
          </script>";
}

$conn->close();
?>