@if ($message = Session::get('success'))
<script>
    swal({
        type: "success",
        title: "Sucesso!",
        text: "{{ $message }}",
        buttonsStyling: !1,
        confirmButtonClass: "btn btn-success"
    })

</script>
@endif


@if ($message = Session::get('error'))
<script>
    swal({
        type: "error",
        title: "Error!",
        text: "{{ $message }}",
        buttonsStyling: !1,
        confirmButtonClass: "btn btn-danger"
    })

</script>
@endif

@if ($message = Session::get('alert'))
<script>
    swal({
        type: "warning",
        title: "Atenção",
        text: "{{ $message }}",
        buttonsStyling: !1,
        confirmButtonClass: "btn btn-warning"
    })
</script>
@endif



@if ($errors->any())
<script>
    swal({
        type: "error",
        title: "Error!",
        text: "{{ $message }}",
        buttonsStyling: !1,
        confirmButtonClass: "btn btn-danger"
    })

</script>
@endif
