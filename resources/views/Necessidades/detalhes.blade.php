@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Consultar necessidade
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<?php
$cor_header = [
    'Emprego' => '#ffc',
    'Moradia' => '#fcc',
    'Utensílios' => '#ccf',
    'Comida' => '#cfc',
    'Móveis' => '#fcf',
    'Remedio' => '#cff',
];

$icone_card = [
    'Emprego' => 'briefcase',
    'Moradia' => 'home',
    'Utensílios' => 'utensils',
    'Comida' => 'bread-slice',
    'Móveis' => 'couch',
    'Remedio' => 'pills',
];
?>

@foreach($necessidades as $necessidade)

<?php
$logradouro = $necessidade->rua . ", " . $necessidade->complemento_endereco . " - " . $necessidade->bairro . " - " . $necessidade->cidade;
?>

<div class="col-12 col-md-12 mb-4 mt-2">
    <div class="card h-100 border-light bg-light shadow">
        <h6 class="card-header" style="background-color: <?php echo $cor_header[$necessidade->categoria] ?>;"><i class="fas h5 fa-{{ $icone_card[$necessidade->categoria] }} m-1"></i> {{ $necessidade->categoria }}</h6>

        <div class="card-body">
            <h5 class="card-title mb-3">{{ $necessidade->descricao }}</h5>

            <small class="text-muted">Nome do Beneficiário</small>
            <p class="card-text">{{ $necessidade->nome }}</p>

            <small class="text-muted">Endereço</small>
            <p class="card-text">{{ $logradouro }}</p>

            <small class="text-muted">País de origem</small>
            <p class="card-text">{{ $necessidade->pais_origem }}</p>

            <small class="text-muted">História</small>
            <p class="card-text">{{ $necessidade->historia }}</p>

        </div>

        <div class="card-footer">
            <div class="d-flex">

                <div class="meta-item m-1">
                    <form action="/atendimentos/iniciar/{{ $necessidade->id }}" method="POST" onsubmit="return confirm('Confirmar atendimento?')">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fas fa-heart m-1"></i>Quero ajudar</button>
                    </form>
                </div>

                <div class="meta-item m-1">
                    <a class="btn btn-info" target="_blank" href="https://www.google.com/maps?q={{ $logradouro }}"><i class="fas fa-map-marked-alt m-1"></i>Ir para o Maps</a>
                </div>

                <div class="meta-item ml-auto m-1">
                    <a class="btn btn-secondary" role="button" href="/"><i class="fas fa-undo-alt m-1"></i>Voltar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
@endsection