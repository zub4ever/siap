$(document).ready(function () {
    $("body").on('click', '.submit', function (e) {
        e.preventDefault();

        swal({
            title: "Você tem certeza?",
            text: "Você não poderá reverter isso!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sim, exclua-o!",
            cancelButtonText: "Não, cancele!",
            confirmButtonClass: "btn btn-success mr-5",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: !1
        }).then((result) => {
            if (result.value) {
                var $this = $(this);
                document.getElementById("formLaravel" + $this.attr("idform")).submit();
            } 
        })
    });
});
