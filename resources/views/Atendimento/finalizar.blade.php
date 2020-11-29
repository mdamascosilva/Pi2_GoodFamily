@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Beneficiario
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">
    <form action="/atendimentos/finalizar/{{ $id }}" method="POST">
        @csrf

        <div>
            <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Descreva um pouco como foi o atendimento da necessidade"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-success"
            onsubmit="return confirm('Finalizar atendimento?')">Finalizar atendimento</button>
        </div>
    </form>
</div>

@endsection