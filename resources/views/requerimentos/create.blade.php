<!doctype html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Atendimento
        </title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>
            body {
                background: #41BCFF
            }

            #regForm {
                background-color: #f8f8f8;
                margin: 0px auto;
                font-family: Raleway;
                padding: 100px;
                border-radius: 10px
            }

            #register {
                color: #6A1B9A
            }

            h1 {
                text-align: center
            }

            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
                border-radius: 10px;
                -webkit-appearance: none
            }

            .tab input:focus {
                border: 1px solid #6a1b9a !important;
                outline: none
            }

            input.invalid {
                border: 1px solid #e03a0666
            }

            .tab {
                display: none
            }

            button {
                background-color: #151C48;
                color: #ffffff;
                border: none;
                border-radius: 50%;
                padding: 20px 30px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer
            }

            button:hover {
                opacity: 0.8
            }

            button:focus {
                outline: none !important
            }

            #prevBtn {
                background-color: #bbbbbb
            }

            .all-steps {
                text-align: center;
                margin-top: 30px;
                margin-bottom: 30px;
                width: 100%;
                display: inline-flex;
                justify-content: center
            }

            .step {
                height: 40px;
                width: 40px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 15px;
                color: #6a1b9a;
                opacity: 0.5
            }

            .step.active {
                opacity: 1
            }

            .step.finish {
                color: #fff;
                background: #6a1b9a;
                opacity: 1
            }

            .all-steps {
                text-align: center;
                margin-top: 30px;
                margin-bottom: 30px
            }

            .thanks-message {
                display: none
            }
        </style>
    </head>
    
    
    
    
       <body oncontextmenu='return false' class='snippet-body'>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                  
                     <form action="{{route('requerimentos.store')}}" method="POST">
                    @csrf
                    @include('requerimentos.form')
                </form>   
                   
                </div>
            </div>
        </div>


                
                

                

 



        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src=''></script>
        <script type='text/Javascript'>
            var currentTab = 0;
            document.addEventListener("DOMContentLoaded", function(event) {


            showTab(currentTab);

            });

            function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            } else {
            document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
            } else {
            document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
            }
            fixStepIndicator(n)
            }

            function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {

            document.getElementById("nextprevious").style.display = "none";
            document.getElementById("all-steps").style.display = "none";
            document.getElementById("register").style.display = "none";
            document.getElementById("text-message").style.display = "block";




            }
            showTab(currentTab);
            }

            function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) { if (y[i].value=="" ) { y[i].className +=" invalid" ; valid=false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className +=" finish" ; } return valid; } function fixStepIndicator(n) { var i, x=document.getElementsByClassName("step"); for (i=0; i < x.length; i++) { x[i].className=x[i].className.replace(" active", "" ); } x[n].className +=" active" ; }
            </script>
    </body>

</html>