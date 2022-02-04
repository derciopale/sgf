@extends('produtos.layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro!</strong> Verifique todos os campos<br><br>
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
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Produto">

        </div>


        <div class="col-md-6">
               <label for="nome" class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" placeholder="Categoria">
        </div>



        <div class="col-md-6">
            <label for="nome" class="form-label">Preço</label>
                <input type="number" name="preco" class="form-control" placeholder="Preço">
        </div>

        <div class="col-md-6">
            <label for="nome" class="form-label">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">

        </div>

        <div class="col-12">
            <label for="nome" class="form-label">Descrição</label>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição"></textarea>

        </div>

        <div class="col-md-6">
            <label for="nome" class="form-label">Data de Fabrico</label>
                <input type="Date" name="dataFabrico" class="form-control" placeholder="Data de Fabrico">
        </div>



        <div class="col-md-6">
            <label for="nome" class="form-label">Data de Expiração</label>
                <input type="Date" name="dataExpiracao" class="form-control" placeholder="Data de Expiração">
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
