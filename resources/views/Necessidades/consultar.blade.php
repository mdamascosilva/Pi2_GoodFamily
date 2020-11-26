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
    <div class='row'>
        <div class='form-group col-sm-2'>
            <label class="control-label" for='categoria'>Categoria</label>

            <select name="categoria" class="form-control" id="categoria" onchange='getNecessidades()'>
                <option value="#" selected disabled>Selecione uma opção</option>
                @foreach($categorias as $categoria)
                <option key="{{ $categoria->id }}" value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4">
            <label class="control-label" for='cidade'>Cidade</label>
            <input type='text' onclick='getNecessidades()' class="form-control" size='40' id='cidade' name='cidade'/>
        </div>
        <div class='form-group col-sm-2'>
            <label class="control-label" for='bairro'>Bairro</label>
            <input type='text' onclick='getNecessidades()' class="form-control" id='bairro' name='bairro' />
        </div>

    </div>
</form>


<div class="lista" id="necessidades"></div>

<script src="/js/request.js"></script>
<script src="/js/getNecessidades.js"></script>
@endsection