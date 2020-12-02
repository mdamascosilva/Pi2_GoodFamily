@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Sua história
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@include('includes.mensagem', ['mensagem' => $mensagem ?? ''])

<div class="form">
    <form action="/beneficiario/historia" method="POST">
        @csrf

        <div class='form-row'>
            <div class="col-md-12 mb-3">
                <label for="historia">História</label>
                <textarea class="form-control" name="historia" id="historia" rows='3' placeholder="Se você se sentir a vontade, conte-nos um pouco mais da sua história. (Não necessário)">{{ $historia ?? '' }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn col-sm-1 btn-success">Cadastrar</button>
        <a href="/" class="btn col-sm-1 btn-secondary" role="button">Cancelar</a>

    </form>
</div>
@endsection