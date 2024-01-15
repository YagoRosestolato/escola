@extends('welcome')


@section('body')


<div style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
    <div style="text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; max-width: 400px;">
      <h2>Cadastrar</h2>
  
      <form action="/cadastro" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="name" class="form-control" value="" placeholder="Nome">
          @error('name')
            <span>{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <input type="text" name="lastName" class="form-control" value="" placeholder="Sobrenome">
          @error('lastName')
            <span>{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" value="" placeholder="Email">
          @error('email')
            <span>{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" value="" placeholder="Senha">
          <!-- Confirm Password input -->
 
          @error('password')
            <span>{{$message}}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        
          
        </button>
      </form>
    </div>
  </div>
    

    
@endsection

