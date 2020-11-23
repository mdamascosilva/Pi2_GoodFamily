@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Sua história
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

@include('mensagem', ['mensagem' => $mensagem ?? ''])

<div class="form">
    <form action="/beneficiario/historia" method="POST">
        @csrf

        <div>
            <textarea name="historia" id="historia" cols="30" rows="10" placeholder="Se você se sentir a vontade, conte-nos um pouco mais da sua história">{{ $historia ?? '' }}</textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </form>
</div>
@endsection