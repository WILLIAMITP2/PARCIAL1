<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            CREAR USUARIO<br>
        </h1>
        <h2>
            <a href="index.php">LISTAS DE USUARIOS</a>
        </h2>
    </div>

    <div>
    <form action="guardar.php" method="post">
        <table class="table">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>password</th>
            </tr>
            </thead>

            <tbody class="center">
            <tr>
                <td><input type="text" name="nombre" size="40"></td>
                <td><input type="text" name="apellido" size="40"></td>
                <td><input type="text" name="email" size="40"></td>
                <td><input type="password" name="password" size="40"></td>
            </tr>
            <tr>
                <td colspan="4"><br><button type="submit">Guardar</button></td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>

</body>
</html>