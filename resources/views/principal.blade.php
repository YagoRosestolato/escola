@extends('welcome')

@section('body')
    <div class="container text-center mt-5">

        <section id="login" class="mb-5">
            <h2 class="text-primary mb-4">Login</h2>

            <form class="w-75 mx-auto">
                <a href="/login" class="btn btn-primary btn-lg">Entrar</a>
            </form>
        </section>

        <section id="cadastro">
            <h2 class="text-success mb-4">Cadastre-se</h2>

            <form class="w-75 mx-auto">
                <a href="/cadastro" class="btn btn-success btn-lg">Cadastrar</a>
            </form>
        </section>

    </div>

    <!-- Scripts JavaScript do Bootstrap (popper.js e jQuery) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
