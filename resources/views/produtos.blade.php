@extends('welcome')

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Produtos</h5>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produto as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->name }}</td>
                            <td>{{ $produto->description }}</td>
                            <td>{{ $produto->price }}</td>
                            <td>
                                <a href="/produtos/editar/{{ $produto->id }}" class="btn btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{ $produto->id }}" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                <a href="/diretor" class="btn btn-primary mb-2">Voltar</a><br>
                <a href="/produtos/novo" class="btn btn-success mb-2">Cadastrar Novo Produto</a><br>

                
            </div>
        </div>
    </div>
@endsection
