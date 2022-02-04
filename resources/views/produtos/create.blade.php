@extends('produtos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        {{-- <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('produtos.create') }}"> Adicionar Novo Produto</a>
        </div> --}}

        <h2 class="text-center">Cadastro de Produtos</h2> <br>

    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Verifique todos os campos<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf


    <div class="container">
        <div class="panel panel-default">

     <div class="row g-3">

        <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">

        </div>


        <div class="col-md-6">
               <label for="nome" class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" placeholder="Categoria">
        </div>



        <div class="col-md-6">
            <label for="nome" class="form-label">Preco</label>
                <input type="number" name="preco" class="form-control" placeholder="Preco">
        </div>

        <div class="col-md-6">
            <label for="nome" class="form-label">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">

        </div>

        <div class="col-12">
            <label for="nome" class="form-label">Descricao</label>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descricao"></textarea>

        </div>

        <div class="col-md-6">
            <label for="nome" class="form-label">Data de Fabrico</label>
                <input type="Date" name="dataFabrico" class="form-control" placeholder="Data de Fabrico">
        </div>



        <div class="col-md-6">
            <label for="nome" class="form-label">Data de Expiracao</label>
                <input type="Date" name="dataExpiracao" class="form-control" placeholder="Data de Expiracao">
        </div>



        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-2">Cadastrar</button>
                <button type="submit" class="btn btn-secondary">Cancelar</button>
        </div>
    </div>

    </div>
</div>


</form>
@endsection
