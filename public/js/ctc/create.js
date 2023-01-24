$(document).ready(function () {


       


    
    function loadSexoDoBeneficiarioTitula1() {
        var beneficiarioId = $("#titula1").val();
        if ($.trim(beneficiarioId) != '') {

            $.get('/retornaSexoDoBeneficiario', {
                beneficiarioId: beneficiarioId
            }, function (result) {
                $("#sexoTitula1").empty();
                $("#sexoTitula1").val(result);

            });
        } else {
            $("#sexoTitula1").val("");
        }
    }

    loadSexoDoBeneficiarioTitula1();

    $("body").on('change', '#titula1', loadSexoDoBeneficiarioTitula1);

    var sexoTitula2 = '';

    
    loadEsposoOuEsposaDoBeneficiario();

    $("body").on('change', '#titula1', loadEsposoOuEsposaDoBeneficiario);

    

    
});
