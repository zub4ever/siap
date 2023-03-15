<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
</head>
<body>
    <h1>QR Code Gerado para o ID {{$id}}</h1>
   <img src="{{ route('almoxarifado.qrcode-with-image', $busca->id) }}" alt="QR Code">

</body>
</html>
