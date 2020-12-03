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
        </div>
        <div class="card-footer">
            <div class="d-flex align-items-center align-self-end">
                <div class="meta-item m-1">
                    <a href="/necessidades/consultar/{{ $necessidade->id }}"><i class="fas fa-heart m-1"></i>Quero ajudar</a>
                </div>

                <div class="meta-item m-1">
                    <a href="/necessidades/consultar/{{ $necessidade->id }}"><i class="fas fa-link m-1"></i>Detalhes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach