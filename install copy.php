<?php
    if(isset($_POST['host'])){
        //escribir en el archivo config las variables de conexion
        $file = fopen("includes/config.php", "w");

        fwrite($file,"<?php" . PHP_EOL);
        fwrite($file, "define('HOST', '" . $_POST['host'] . "');" . PHP_EOL);
        fwrite($file, "define('USER', '" . $_POST['user'] . "');" . PHP_EOL);
        fwrite($file, "define('PASSWORD', '" . $_POST['password'] . "');" . PHP_EOL);
        fwrite($file, "define('DB', '" . $_POST['db'] . "');" . PHP_EOL);
        fwrite($file, "?>");

        fclose($file);

        echo "creando  el archivo de conexion";

        //importando la base de datos
        $sql = file_get_contents('includes/db.sql');

        include('includes/db.php');

        if(DB::getConnection()->multi_query($sql)){
            //si es true se ejecuta la importacion correctamente
            unlink('install.php');
            header('Location: index.php');
        }else{
            echo "<br>no se a podido importar la base de datos, verifique los errores";
        }
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>install</title>
</head>
<body>
    <h1>Para el correcto funcionamiento del sistema llena la siguiente información:</h1>
    <form action="install.php" method="post">
        <div>
            <label for="host">Host</label>
            <input type="text" name="host" >
        </div>

        <div>
            <label for="user">Usuario DB</label>
            <input type="text" name="user" >
        </div>

        <div>
            <label for="password">Contrasña DB</label>
            <input type="text" name="password">
        </div>

        <div>
            <label for="db">Base de datos</label>
            <input type="text" name="db">
        </div>

        <button>Guardar</button>
    </form>
</body>
</html>