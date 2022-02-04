@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="row">

        <div class="col-md-4">
            <x-adminlte-info-box title="Produtos" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

        <div class="col-md-4">
            <x-adminlte-info-box title="Vendas" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

        <div class="col-md-4">
            <x-adminlte-info-box title="Vendas" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

    </div>
@stop

@section('content')
    <p>Conteudo</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
