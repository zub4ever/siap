<!-- resources/views/atendimento/show.blade.php -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Informações do Atendimento</h1>
            <p>Nome do Assegurado: {{ $atendimento->nm_assegurado }}</p>
            <p>Matrícula: {{ $atendimento->matricula }}</p>
        </div>
    </div>
</div>

<script>
    alert("Registro {{ $atendimento->id }} está sendo requisitado");
</script>
