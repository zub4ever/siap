


<script>
    $(document).ready(function () {
        $('#select2').select2();
        $('#select2').on('change', function (e) {
            var data = $('#select2').select2("val");
            @this.set('ottPlatform', data);
        });
    });

</script>

