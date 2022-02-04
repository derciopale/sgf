<!DOCTYPE html>
<html>
<head>
    <title>SGF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">

    @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    {{-- <div class="row">

        <div class="col-md-4">
            <x-adminlte-info-box title="Produtos" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

        <div class="col-md-4">
            <x-adminlte-info-box title="Vendas" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

        <div class="col-md-4">
            <x-adminlte-info-box title="Vendas" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
        </div>

    </div> --}}
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

</div>

</body>
</html>
