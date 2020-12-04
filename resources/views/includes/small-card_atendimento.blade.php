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

@foreach($atendimentos as $atendimento)
<div class="col-12 col-md-4 mb-4 mt-2">
    <div class="card h-100 border-light bg-light shadow">
        <h6 class="card-header" style="background-color: <?php echo $cor_header[$atendimento->categoria] ?>;"><i class="fas h5 fa-{{ $icone_card[$atendimento->categoria] }} m-1"></i> {{ $atendimento->categoria }}</h6>
        <div class="card-body">
            <h5 class="card-title mb-3">{{ $atendimento->descricao }}</h5>
            @if ($beneficiario) 
            <small class="text-muted">Atendido por</small>
            <p class="card-text">{{ $atendimento->nome }}</p>

            @else
            <p class="card-text">{{ $atendimento->cidade }}, bairro {{ $atendimento->bairro }}</p>
                @if ($atendimento->confirmacao)
                <small class="text-muted">Confirmado atendimento as</small>
                <p class="card-text">{{ $atendimento->confirmacao }}</p>
                @endif
            @endif

            <small class="text-muted">Atendimento</small>
            <p class="card-text">{{ $atendimento->inicio_atendimento }}</p>
        </div>
        <div class="card-footer">
            <div class="d-flex">
                @if ($beneficiario) 
                <a class="ml-auto" href="/atendimentos/consultar/beneficiario/{{ $atendimento->id }}">
                    <i class="fas fa-search m-1"></i>
                    Ver detalhes
                </a>
                @else
                <?php
                    $logradouro = $atendimento->rua . ", " . $atendimento->complemento_endereco . " - " . $atendimento->bairro . " - " . $atendimento->cidade;
                ?>
                <a target="_blank" href="https://www.google.com/maps?q={{ $logradouro }}">
                    <i class="fas fa-map-marked-alt m-1"></i>
                    Ir para o Maps
                </a>

                <a class="ml-auto" href="/atendimentos/consultar/{{ $atendimento->id }}">
                    <i class="fas fa-search m-1"></i>
                    Ver detalhes
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach