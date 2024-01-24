@extends('welcome')

@section('body')
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
        <div style="text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; max-width: 400px;">

            <h2>Login</h2>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                            placeholder="Senha" id="passwordInput">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Login</button>

                <button type="button" class="btn btn-primary">
                    <a href="/cadastro" style="color: white; text-decoration: none;">Cadastre-se</a>
                </button>
            </form>
            {{ isset($erro) && $erro != '' ? $erro : '' }}

        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('passwordInput');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '<i class="fa fa-eye-slash" aria-hidden="true"></i>' : '<i class="fa fa-eye" aria-hidden="true"></i>';
        });

    </script>
@endsection
