<!DOCTYPE html>
<html lang="en">
    <head>
        <title>hola k ace</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Duda del cliente</h1>
        <p>Favor de atender al mensaje, lo más rapido posible.</p>

        <p><strong>Nombre:</strong>{{$contacto['nombre']}}</p>
        <p><strong>Correo:</strong>{{$contacto['correo']}}</p>
        <p><strong>Télefono:</strong>{{$contacto['telefono']}}</p>
        <p><strong>Mensaje:</strong>{{$contacto['mensaje']}}</p>


    
    </body>
</html>