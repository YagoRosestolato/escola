@extends('welcome', ['current' => 'produtos'])


@section('body')
    <div>
        <h1>Criar novo produto</h1>
        <form action="/produtos/{{ $cat->id }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ $cat->name }}" placeholder="Nome">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" value="{{ $cat->description }}"
                    placeholder="Descrição">
                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" name="price" class="form-control" value="{{ $cat->price }}" placeholder="Preço">
                @error('price')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="/produtos" class="btn btn-info">Listar Produtos</a>
        </form>
    </div>
@endsection
