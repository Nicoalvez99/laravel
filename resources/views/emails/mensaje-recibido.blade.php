<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de {{ $mensaje['name'] }} - {{ $mensaje["email"] }}</p>
    <p>Asunto {{ $mensaje['asunto'] }}</p>
    <p>Descripcion {{ $mensaje['descripcion'] }}</p>
</body>
</html>