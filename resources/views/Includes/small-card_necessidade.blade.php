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
        </div>

        @if ($footer)
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <div class="meta-item m-1">
                    <a class="btn btn-info" href="/necessidades/alterar/{{ $necessidade->id }}"><i class="fas fa-edit m-1"></i></a>
                </div>

                <div class="meta-item m-1">
                    <form method="POST" 
                        action="/necessidades/excluir/{{ $necessidade->id }}" 
                        onsubmit="return confirm('Tem certeza que deseja excluir essa necessidade?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt m-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endforeach