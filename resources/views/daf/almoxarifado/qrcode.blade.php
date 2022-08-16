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

    </div>
    <div class="row d-flex justify-content-center">
       
        <div class="col-xs-12 col-md-4">
            <br>
            @foreach($almoxarifado as $busca)
            <tr>
                <td style="text-align:center;"> {!! QrCode::size(100)->merge(public_path('imagem/rbPrevlogo2.svg'), 0.5, true)->generate('http://sisa.rbprev.riobranco.ac.gov.br/consulta/'.$busca->id) !!}</td>
                <td style="text-align:center;"><img src="/imagem/rbPrev.png"></td>
            </tr>
            @endforeach
        </div>
        
    </div>



</body>

</html>