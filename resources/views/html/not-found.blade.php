@extends('app')

@section('content')
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title fa fa-warning"> Opss</h3>
        </div>
        <div class="box-body">
            <h4>A página solicitada não foi encontrada</h4>
            <br>
            <a href="{!! url('/') !!}" class="btn btn-warning fa fa-home"> Página Incial</a>
        </div>
    </div>
@stop