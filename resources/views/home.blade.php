@extends('welcome', ['current' => 'produtos'])


@section('body')


<body class="bg-light d-flex align-items-center">

    <div class="container mt-4">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4 d-flex flex-column">
                <div class="card flex-fill">
                    <div class="card-body">
                        <h5 class="card-title">Área do Diretor</h5>
                        <p class="card-text">Bem-vindo à área do diretor. Gerencie produtos e mais.</p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('app.diretor') }}" class="btn btn-primary btn-block">Acessar</a>
                </div>
            </div>


            <div class="col-md-4 mb-4 d-flex flex-column">
                <div class="card flex-fill">
                    <div class="card-body">
                        <h5 class="card-title">Área do Fornecedor</h5>
                        <p class="card-text">Gerencie fornecedores e mais nesta área.</p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('app.fornecedor') }}" class="btn btn-primary btn-block">Acessar</a>
                </div>
            </div>
        </div>
    </div>


@endsection










