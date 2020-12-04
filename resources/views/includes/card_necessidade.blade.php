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
<div class="col-12 col-md-4 mb-4 mt-2">
    <div class="card h-100 border-light bg-light shadow">
        <h6 class="card-header" style="background-color: <?php echo $cor_header[$necessidade->categoria] ?>;"><i class="fas h5 fa-{{ $icone_card[$necessidade->categoria] }} m-1"></i> {{ $necessidade->categoria }}</h6>
        <div class="card-body">
            <h5 class="card-title mb-3">{{ $necessidade->descricao }}</h5>
            <p class="card-text">{{ $necessidade->cidade }}, bairro {{ $necessidade->bairro }}</p>
            <small class="text-muted">País de origem</small>
            <p class="card-text">{{ $necessidade->pais_origem }}</p>
        </div>
        <div class="card-footer">
            <div class="d-flex">
                @if ($login)
                <div class="meta-item ml-auto m-1">
                    <a href="/necessidades/consultar/{{ $necessidade->id }}"><i class="fas fa-heart m-1" style="color:#f00;"></i>Quero ajudar</a>
                </div>

                @else
                <div class="meta-item ml-auto m-1">
                    <a href="/registrar/apoiador/"><i class="fas fa-heart m-1" style="color:#f00;"></i>Quero ajudar</a>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endforeach