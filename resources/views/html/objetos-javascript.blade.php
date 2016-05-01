@extends('app')

@section('content')
    <h3>OBJETOS EM JAVASCRIPT</h3>

    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">TIPOS DE CRIAÇÃO</h3>
            </div>
            <div class="box-body">
                @include('html.objetos.tipo-criacao')
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">ATRIBUTOS</h3>
            </div>
            <div class="box-body">
                @include('html.objetos.tipo-atributos')
            </div>
        </div>
    </div>

    <script type="text/javascript">

    </script>
@stop