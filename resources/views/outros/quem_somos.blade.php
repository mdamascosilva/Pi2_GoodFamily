@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Quem somos
@endsection

@section('conteudo')



@endsection