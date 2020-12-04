@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Contato
@endsection

@section('conteudo')

<section class="pt-2">
    <div class="container">
        <div class="row d-flex">
            <div class="col-12 col-md-3 mb-4 mt-2">
                <div class="card h-100 border-light bg-light shadow">
                    <h6 class="card-header">Alyson Martins Estevão</h6>
                    <div class="card-body">
                        <small class="text-muted">E-mail</small>
                        <small class="card-text">alyson.estevao@aluno.usj.edu.br</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4 mt-2">
                <div class="card h-100 border-light bg-light shadow">
                    <h6 class="card-header">Lucas Gustavo Machado</h6>
                    <div class="card-body">
                        <small class="text-muted">E-mail</small>
                        <small class="card-text">lucas.machado@aluno.usj.edu.br</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4 mt-2">
                <div class="card h-100 border-light bg-light shadow">
                    <h6 class="card-header">Marcelo Damasco da Silva</h6>
                    <div class="card-body">
                        <small class="text-muted">E-mail</small>
                        <small class="card-text">marcelo.silva@aluno.usj.edu.br</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4 mt-2">
                <div class="card h-100 border-light bg-light shadow">
                    <h6 class="card-header">Ulysses Werlich Borges</h6>
                    <div class="card-body">
                        <small class="text-muted">E-mail</small>
                        <small class="card-text">ulysses.borges@aluno.usj.edu.br</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection