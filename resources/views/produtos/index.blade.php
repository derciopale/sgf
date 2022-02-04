@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produto.create') }}"> Novo Produto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>preco</th>
            <th>Quantidade</th>
            <th>Descricao</th>
            <th>Data de Fabrico</th>
            <th>Data da Expiracao</th>



            <th width="280px">Accao</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->categoria }}</td>
            <td>{{ $produto->preco }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->dataFabrico }}</td>
            <td>{{ $produto->dataExpiracao }}</td>
            <td>
                <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('produtos.show',$produto->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $produtos->links() !!}

@endsection
