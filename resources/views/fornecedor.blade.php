@extends('welcome')

@section('body')
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Área do Fornecedor</h1>
        <p class="lead">Bem-vindo à EscolaShop, a plataforma exclusiva para compra de produtos para sua escola.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/produtos" role="button">Itens a venda</a>
        <a class="btn btn-secondary btn-lg" href="/produtos/novo" role="button">Adicionar Produtos</a>
        <a class="btn btn-secondary btn-lg" href="/fornecedor/novo" role="button">Cadastre sua empresa</a>
        

    </div>
    
</div>
@endsection
