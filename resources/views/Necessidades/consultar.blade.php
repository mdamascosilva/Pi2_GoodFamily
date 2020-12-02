@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Consulte alguma necessidade
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<form method='POST'>
    <div class='form-row'>

        <div class='form-group col-sm-3'>
            <label class="control-label" for='categoria'>Categoria</label>

            <select name="categoria" class="form-control" id="categoria">
                <option value="%%" selected>Todos</option>
                @foreach($categorias as $categoria)
                <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-3">
            <label class="control-label" for='cidade'>Cidade</label>
            <input type='text' class="form-control" size='40' id='cidade' name='cidade' />
        </div>

        <div class='form-group col-sm-3'>
            <label class="control-label" for='bairro'>Bairro</label>
            <input type='text' class="form-control" id='bairro' name='bairro' />
        </div>

        <div class='form-group col-sm-1' style="margin-top: 32px;"> 
            <a href='javascript:getNecessidades()' class="btn btn-primary" id='button' role="button">Consulta</a>
        </div>
    </div>
</form>

<section class="pt-5 pb-5">
    <div class="container">
        <div id="necessidades" class="row d-flex">

        </div>
    </div>
</section>

<script src="/js/request.js"></script>
<script src="/js/getNecessidades.js"></script>
@endsection