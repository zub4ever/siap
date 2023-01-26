$(document).ready(function () {

    $('.select2').select2();
        $('#serve_id').on('change', function(){
            var id = $(this).val();
            $.ajax({
                type: 'GET',
                url: '{{ route(user.details) }}',
                data: { id: id },
                success: function(data) {
                    $('#data_nascimento').val(data.dob);
                    $('#cpf').val(data.cpf);
                }
            });
        });
   




    
});
