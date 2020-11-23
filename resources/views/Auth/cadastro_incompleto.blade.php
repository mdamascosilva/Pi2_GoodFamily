@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Ops...<br/>
Identificamos que foi feito já um cadastro de {{ $user->user_type }} para esse e-mail, <br/>
mas falta algumas informações.
@endsection

@section('conteudo')

<div class="form">
    <h2><a href="/{{ $user->user_type }}/cadastrar">Ok, completar informações</a></h2>
</div>

@endsection