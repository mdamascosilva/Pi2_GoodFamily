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
<br/>
<div class="alguns_casos">
    Alguns casos:
    @foreach($necessidades as $necessidade)

    <div class="bloco">
        <div class="linha">
            <a href="/registrar/apoiador">
                Quero ajudar
            </a>
        </div>

        <div class="linha">
            <p>Categoria</p>
            <p>{{ $necessidade->categoria }}</p>
        </div>

        <div class="linha">
            <p>Descrição</p>
            <p>{{ $necessidade->descricao }}</p>
        </div>

        <div class="linha">
            <p>Bairro</p>
            <p>{{ $necessidade->bairro }}</p>
        </div>

        <div class="linha">
            <p>Cidade</p>
            <p>{{ $necessidade->cidade }}</p>
        </div>
    </div>

    <br />
    @endforeach
</div>

@endsection