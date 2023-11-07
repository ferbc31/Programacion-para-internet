<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        body {
            background-color: #E6F7FF;
            font-family: 'Montserrat', sans-serif;
            color: #1e1e1e;
            font-weight: normal;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 50%;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 75%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        #error-message {
            color: red;
        }
        #success-message {
            color: green;
        }
        .btn-create, .btn-delete {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px; 
            padding: 15px 20px;
            background-color: #4e94f3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto;
        }
        .btn-create:hover, .btn-delete:hover {
            background-color: #357ab7;
        }
    </style>
</head>


<body>
    <h1>Edición de Empleados</h1>
    <?php
    if (!empty($error_message)) {
        echo '<div id="error-message">' . $error_message . '</div>';
    }
    if (!empty($success_message)) {
        echo '<div id="success-message">' . $success_message . '</div>';
    } 
    ?>
    <form method="POST" action="actualizar_empleado.php?id=<?php echo $employee_id; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" value="<?php echo $correo; ?>" required>
        <div id="email-error"></div> 

        <label for="password">Nueva Contraseña (opcional):</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Guardar" class="btn-create">
        <a href="b2.php" class="btn-delete">Regresar al listado</a>
    </form>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const nombre = document.getElementById('nombre').value;
            const correo = document.getElementById('correo').value;
            const rol = document.getElementById('rol').value;

            if (!nombre || !correo || !rol) {
                event.preventDefault();
                document.getElementById('error-message').textContent = 'Faltan campos por llenar.';
                setTimeout(() => {
                    document.getElementById('error-message').textContent = '';
                }, 5000);
            }
        });
    </script>
</body>
</html>
    