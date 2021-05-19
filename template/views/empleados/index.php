<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo URL.'employee/add'; ?>" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombres" id="">  
        <br>  
        <label for="">Apellido</label>
        <input type="text" name="apellidos" id="">  
        <br>
        <label for="">Correo</label>
        <input type="text" name="correo" id="">  
        <br>
        <label for="">Teléfono</label>
        <input type="text" name="telefono" id="">  
        <br>
        <label for="">Cargo</label>
        <select name="cargo" id="">
            <option value="" disabled selected>Seleccione el cargo</option>
            <option value="coordinador">coordinado</option>
            <option value="investigador">investigador</option>
        </select>
        <br>
        <label for="">Contraseña</label>
        <input type="text" name="contrasenia" id="">  
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>