@foreach($atendimentos as $atendimento)

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
$logradouro = $atendimento->rua . ", " . $atendimento->complemento_endereco . " - " . $atendimento->bairro . " - " . $atendimento->cidade;
?>

<div class="col-12 col-md-12 mb-4 mt-2">
    <div class="card h-100 border-light bg-light shadow">
        <h6 class="card-header" style="background-color: <?php echo $cor_header[$atendimento->categoria] ?>;"><i class="fas h5 fa-{{ $icone_card[$atendimento->categoria] }} m-1"></i> {{ $atendimento->categoria }}</h6>

        <div class="card-body">
            <h5 class="card-title mb-3">{{ $atendimento->descricao }}</h5>

            <small class="text-muted">Atendimento</small>
            <p class="card-text">{{ $atendimento->inicio_atendimento }}</p>

            <small class="text-muted">Nome do Beneficiário</small>
            <p class="card-text">{{ $atendimento->nome }}</p>

            <small class="text-muted">Endereço</small>
            <p class="card-text">{{ $logradouro }}</p>

            <small class="text-muted">História</small>
            <p class="card-text">{{ $atendimento->historia }}</p>

        </div>

        <div class="card-footer">
            <div class="d-flex">

                <div class="meta-item m-1">
                    <a class="btn btn-info" target="_blank" href="https://www.google.com/maps?q={{ $logradouro }}"><i class="fas fa-map-marked-alt m-1"></i>Ir para o Maps</a>
                </div>

                <div class="meta-item m-1">
                    <a class="btn btn-secondary" role="button" href="/"><i class="fas fa-undo-alt m-1"></i>Voltar</a>
                </div>

                <div class="meta-item ml-auto m-1">
                    <form action="/atendimentos/cancelar/{{ $atendimento->id }}" method="POST" onsubmit="return confirm('Deseja realmente cancelar o atendimento?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-heart-broken m-1"></i>Cancelar atendimento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach