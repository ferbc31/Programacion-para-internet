<!DOCTYPE html>
<html>
<head>
    <title>INDEX</title>
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
    <form name="Forma01" id="Forma01" method="get" action="recibe.php">
        <h2>Login</h2>
        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" value="@" /><br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" placeholder="Escribe tu contraseña" /><br>
        <input type="submit" onclick="validar(); return false;" value="Enviar" class="btn-create"/>
    </form>

    <script>
        function validar() {
            var correo = document.Forma01.correo.value;
            var pass = document.Forma01.pass.value;

            if (correo == '' || pass == '') {
                alert('Faltan campos por llenar');
            } else {
                alert('Campos llenos');
            }
        }
    </script>
</body>
</html>

/*encriptar md5*/