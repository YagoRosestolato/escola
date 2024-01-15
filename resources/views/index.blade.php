@extends('welcome')

@section('body')
    <!-- Conteúdo da Página -->
    <div class="container text-center mt-5">

        <!-- Seção de Login -->
        <section id="login" class="mb-5">
            <h2 class="text-primary">Login</h2>
            <!-- Seu formulário de login aqui -->
            <form class="w-75 mx-auto">
                <!-- Campos de login, e.g., email, senha -->
                <a href="/login" class="btn btn-primary btn-lg">Entrar</a>
            </form>
        </section>

        <!-- Seção de Cadastro -->
        <section id="cadastro">
            <h2 class="text-success">Cadastro</h2>
            <!-- Seu formulário de cadastro aqui -->
            <form class="w-75 mx-auto">
                <!-- Campos de cadastro, e.g., nome, sobrenome, email, senha -->
                <a href="/cadastro" class="btn btn-success btn-lg">Cadastrar</a>
            </form>
        </section>

    </div>

    <!-- Scripts JavaScript do Bootstrap (popper.js e jQuery) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
@endsection
