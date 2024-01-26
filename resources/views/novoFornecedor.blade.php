@extends('welcome', ['current' => 'fornecedor'])

@section('body')
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
        <div style="text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; max-width: 400px;">
            <h2>Cadastro de Fornecedor</h2>
            <form action="{{ url('/produtos') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="" placeholder="Nome">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="cpf" class="form-control" value="" placeholder="CPF">
                    @error('cpf')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="endereco" class="form-control" value="" placeholder="Endereço">
                    @error('endereco')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="empresa" class="form-control" value="" placeholder="Empresa">
                    @error('empresa')
                        <span>{{ $message }}</span>
                    @enderror
                </div> 
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
