@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Nos informe suas necessidades a seguir!
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">

    <form action="/necessidades/cadastrar" method="POST">

        @csrf
        <div>
            <label for="categoria_id">Categoria</label>
            <select id="categoria_id" name="categoria_id">
                <option selected disabled>Selecione uma opção</option>

                @foreach($categorias as $categoria)
                <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                @endforeach

            </select>
        </div>

        <div>
            <p for="descricao">Descrição</p>
            <textarea name="descricao" id="descricao" rows='10' cols='80' placeholder="Descrição" required></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-default">Salvar</button>
        </div>
    </form>
</div>
@endsection