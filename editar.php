<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from usuario where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
        echo "El usuario no existe";
        die;
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            Editar usuario
        </h1>
        <h2>
            <a href="index.php">Lista de usuarios</a><br>
            <a href="crear.php">Nuevo usuario</a>
        </h2>
    </div>

    <div>
    <form action="guardar.php" method="post">
    <input type="hidden" name="id" value="<?= $persona->id ?>">
        <table class="table">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>password</th>
                <th>Estado</th>
            </tr>
            </thead>

            <tbody class="center">
            <tr>
                <td><input type="text" name="nombre" size="40" value="<?= $persona->nombres ?>"></td>
                <td><input type="text" name="apellido" size="40" value="<?= $persona->apellidos ?>"></td>
                <td><input type="text" name="email" size="40" value="<?= $persona->email?>"></td>
                <td><input type="password" name="password" size="40" value=""></td>
                <td>
                <?php  if($persona->estado == "activo"){  ?>
                    <input type="radio" name="estado" value="activo" checked>Activo<br>
                    <input type="radio" name="estado" value="inactivo">Inactivo
                <?php  }else{  ?>
                    <input type="radio" name="estado" value="activo" >Activo<br>
                    <input type="radio" name="estado" value="inactivo" checked>Inactivo
                <?php  }  ?>
                </td>
            </tr>
            <tr>
                <td colspan="5"><br><button type="submit">Guardar</button></td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>

</body>
</html>