<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primera web</title>
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    </header>
    <main>
        <h1 class="display-1">Registrate y envia una imágen...</h1>
        <form action="registraUsuario.php" method="POST">
                <label>Nombre:</label>
                <input type="text" class="form-control form-cust" name="nombreUs">
                <label>Email:</label>
                <input type="text" class="form-control form-cust" name="emailUs">
                <label>Contraseña:</label>
                <input type="password" class="form-control form-cust" name="passUs">
                <label>Telefono:</label>
                <input type="text" class="form-control form-cust" name="telefonoUs">
                <label>DNI:</label>
                <input type="text" class="form-control form-cust" name="dniUs">
                <br>
                <form action="procesaSubida.php" method="POST" enctype= "multipart/form-data">
            Archivo adjunto:
            <input type="file" name="archivo" id="archivo" accept=".jpg, jpeg, png"><br>
            <button type="submit">Enviar</button>
            
         </form>
    </main>
    

</body>