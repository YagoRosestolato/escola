@extends('welcome')

@section('body')

<div style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
    <div style="text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; max-width: 400px;">
  
        <h2>Login</h2>
    
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control" value="{{ old('email')}}" placeholder="Email">
                @error('email')
                <span>{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" value="{{ old('password')}}" placeholder="Senha">
                @error('password')
                <span>{{ $message}}</span>
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

@endsection
