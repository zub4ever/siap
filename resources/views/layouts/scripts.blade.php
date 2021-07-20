<!--=========================*
          All JS
*===========================-->

<script src="{{asset('js/all.js')}}"></script>
<!-- SELECT-2 -->
 <link href="{{asset('assets/vendors/select2/select2.min.css')}}" rel="stylesheet" />
 <script type="text/javascript" src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>
<!--=========================*
        Select 2 servidor
*===========================-->
<script>
    $(document).ready(function() {
        
          $('.servidorSelect2').select2({
            placeholder: 'Selecione o Matricula-Servidor'
          });
    });
</script>
<!--=========================*
        Select 2 Cidade
*===========================
<script>
    $(document).ready(function() {
        
          $('.cidadeSelect2').select2({
            placeholder: 'Selecione Cidade'
          });
    });
</script>-->
<!--=========================*
        Select 2 Estado
*===========================
<script>
    $(document).ready(function() {
        
          $('.estadoSelect2').select2({
            placeholder: 'Selecione Estado(UF)'
          });
    });
</script>-->
