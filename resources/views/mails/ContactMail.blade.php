<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @font-face {
            font-family: Europa;
            src: url(css/europa.ttf);
        }
    </style>
</head>
<body style="font-family: Europa;">

    <span style="margin-bottom: 30px"><strong style="margin-right: 300px;">Nombre:</strong> {{ $nombre }} </span><br>
    <span><strong>Correo:</strong> {{ $mail }} </span>
    <br>
    <p><strong>Mensaje:</strong>{{ $mensaje }} </p>

    <p style="font-size: 12px">Este mensaje fue enviado desde: www.ib-mexico.com/contacto</p>
</body>
</html>