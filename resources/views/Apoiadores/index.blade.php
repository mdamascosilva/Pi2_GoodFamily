@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Apoiadores
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

<div>
    <h3>Bem vindo! Selecionamos algumas pessoas que precisam de auxílio próximas de você.</h3>
</div>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row d-flex">
            @foreach($necessidades as $necessidade)
            <div class="col-12 col-md-4 mb-4 mt-2">
                <div class="card h-100 border-light bg-light shadow">
                    <h6 class="card-header">{{ $necessidade->categoria }}</h6>

                    <div class="card-body">
                        <h5 class="card-title mb-3">{{ $necessidade->descricao }}</h5>
                        <p class="card-text">{{ $necessidade->cidade }}, bairro {{ $necessidade->bairro }}</p>

                        <div class="d-flex align-items-center align-self-end">
                            <div class="meta-item m-2">
                                <a href="/necessidades/consultar/{{ $necessidade->id }}"><i class="fas fa-heart m-1"></i>Quero ajudar</a>
                            </div>

                            <div class="meta-item m-2">
                                <a href="/necessidades/consultar/{{ $necessidade->id }}"><i class="fas fa-link m-1"></i>Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection