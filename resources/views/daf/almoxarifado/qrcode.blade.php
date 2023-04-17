<!DOCTYPE html>
<html>
    <head>
        <title>QR Code</title>
    </head>
    <body>
        <h1>QR Code Gerado para </h1>


        <div class="visible-print text-center">

            <div>
                {{ $qrCodeImage }}

            </div>



            {!!


            QrCode::generate('Make me into a QrCode!');

            !!}

            

           



        </div>




    </body>
</html>
