<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consulta QRCode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <img src="/imagem/logo2.png" height="100" width="100">
    </div>
    <br><br><br>
    <table border="1" align="center">
        @foreach($almoxarifado as $busca)
        <tr>
            <th style="text-align:center;">{!! QrCode::size(100)->merge(public_path('imagem/rbPrevlogo2.svg'), 0.5, true)->generate('http://siap.rbprev.riobranco.ac.gov.br/consulta/'.$busca->id) !!}</th>
            <td><img src="/imagem/rbPrev.png"> </td>
        </tr>
        <tr>
            <th rowspan="2">{{$busca->nm_patrimonio}}</th>
        </tr>
        <tr>
        </tr>
        @endforeach
    </table>
    <style type="text/css">
        .table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</body>

</html>