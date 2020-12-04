@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Nos informe o que você precisa!
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">

    <form class="needs-validation" novalidate action="/necessidades/cadastrar" method="POST">

        @csrf
        <div class='form-row'>
            <div class="col-md-3 mb-3">
                <label class="control-label" for='categoria'>Categoria</label>

                <select class="form-control" id="categoria_id" name="categoria_id" required>
                    <option value='' selected disabled>Selecione uma opção</option>
                    @foreach($categorias as $categoria)
                    <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor informe a categoria da sua necessidade
                </div>
            </div>
        </div>

        <div class='form-row'>
            <div class="col-md-12 mb-3">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows='2' placeholder="Descreva um pouco da sua necessidade" required></textarea>
                <div class="invalid-feedback">
                    Descreva um pouco da sua necessidade
                </div>
            </div>
        </div>

        <button type="submit" class="btn col-sm-1 btn-success">Cadastrar</button>
        <a href="/" class="btn col-sm-1 btn-secondary" role="button">Cancelar</a>

    </form>
</div>

<script src="/js/validation.js"></script>

@endsection