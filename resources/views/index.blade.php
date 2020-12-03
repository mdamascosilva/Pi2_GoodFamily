@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

<div class='descricao'>
    Alguma descrição nossa
</div>

<br/>

<div class='graficos'>
    Nossos resultados
    <div>
        Beneficiários cadastrados {{ $numeros['beneficiarios'] }}
    </div>
    <div>
        Apoiadores cadastrados {{ $numeros['apoiadores'] }}
    </div>
    <div>
        Pedidos de auxílio {{ $numeros['necessidadesAbertas'] }}
    </div>
    <div>
        Remédio
    </div>
    <div>
        Comida
    </div>
    <div>
        Emprego
    </div>
    <div>
        Moradia
    </div>
    <div>
        Moveis
    </div>
    <div>
        Utensilios
    </div>
</div>
<br/>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row d-flex">
            @include('includes.card_necessidade', ['necessidades' => $necessidades])
        </div>
    </div>
</section>

@endsection