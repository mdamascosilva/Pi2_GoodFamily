@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Sua necessidade
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="form">

    @if($necessidade)
    <form action="/necessidades/alterar/{{ $necessidade->id }}" method="POST">

        @csrf
        <div>
            <label for="categoria_id">Categoria</label>
            <select id="categoria_id" name="categoria_id">

                @foreach($categorias as $categoria)
                <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                @endforeach

            </select>
        </div>

        <script>document.getElementById('categoria_id').value = '<?php echo $necessidade->categoria_id ?? '' ?>';</script>

        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows='10' cols='80' placeholder="Descrição" required>{{ $necessidade->descricao }}</textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </form>
    @endif
</div>
@endsection