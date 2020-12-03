@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Altere a descrição de sua necessidade
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">
    @if($necessidade)
    <form class="needs-validation" novalidate action="/necessidades/alterar/{{ $necessidade->id }}" method="POST">

        @csrf

        <div class='form-row'>
            <div class="col-md-3 mb-3">
                <label class="control-label" for='categoria'>Categoria</label>

                <select class="form-control" id="categoria_id" name="categoria_id" required>
                    @foreach($categorias as $categoria)
                    <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor informe a categoria da sua necessidade
                </div>
            </div>
        </div>
        <script>
            document.getElementById('categoria_id').value = '<?php echo $necessidade->categoria_id ?? '' ?>';
        </script>

        <div class='form-row'>
            <div class="col-md-12 mb-3">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows='2' placeholder="Descreva um pouco da sua necessidade" required>{{ $necessidade->descricao }}</textarea>
                <div class="invalid-feedback">
                    Descreva um pouco da sua necessidade
                </div>
            </div>
        </div>

        <button type="submit" class="btn col-sm-1 btn-success">Alterar</button>
        <a href="/" class="btn col-sm-1 btn-secondary" role="button">Cancelar</a>

    </form>
    @endif
</div>

<script src="/js/validation.js"></script>

@endsection