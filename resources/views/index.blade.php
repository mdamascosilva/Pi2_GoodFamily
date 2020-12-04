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

<div class="container-fluid">
    <section class="pt-2 pb-3">

        <div class="row d-flex mb-5">

            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <a href="/registrar/beneficiario">
                        <div class="card-content">
                            <div class="card-body cleartfix text-black-50" style="background-color: #cfc;">
                                <div class="media align-items-stretch">
                                    <div class="media-body ml-3">
                                        <h5>Faça seu cadastro como</h5>
                                        <h3><strong>Beneficiários</strong></h3>
                                    </div>
                                    <div class="align-self-center mr-3">
                                        <i class="fas h1 fa-smile m-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <a href="/registrar/apoiador">
                        <div class="card-content">
                            <div class="card-body cleartfix text-black-50" style="background-color: #cff;">
                                <div class="media align-items-stretch">
                                    <div class="ml-3 media-body">
                                        <h5>Faça seu cadastro como</h5>
                                        <h3><strong>Apoiador</strong></h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas h1 fa-hands-helping m-1 mr-3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase">Nossos resultados</h4>
                <p>Alguns dos números do projeto Good Family.</p>
            </div>
        </div>

        <div class="row d-flex">

            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fefefe">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-4 ml-4">{{ $numeros['beneficiarios'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h3><strong>Beneficiários</strong></h3>
                                    <h5>cadastrados</h5>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-smile m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fefefe;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-4 ml-4">{{ $numeros['apoiadores'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h3><strong>Apoiadores</strong></h3>
                                    <h5>cadastrados</h5>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-hands-helping m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fefefe;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-4 ml-4">{{ $numeros['necessidadesAbertas'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos de</h5>
                                    <h3><strong>auxílio</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-hands m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fefefe;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-4 ml-4">{{ $numeros['atendimentos'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h3><strong>Atendimentos</strong></h3>
                                    <h5>realizados</h5>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-hand-holding-heart m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h4>Número de pedidos por categoria</h4>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #cfc;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesComida'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Comida</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-bread-slice m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #ffc;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesEmprego'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Emprego</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-briefcase m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fcc;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesMoradia'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Moradia</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-home m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #fcf;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesMoveis'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Móveis</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-couch m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #ccf;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesUtencilios'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Utensílios</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-utensils m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-md-12 mb-4 mt-2">
                <div class="card shadow border-light">
                    <div class="card-content">
                        <div class="card-body cleartfix text-black-50" style="background-color: #cff;">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <h1 class="mr-3 ml-2">{{ $numeros['necessidadesRemedio'] }}</h1>
                                </div>
                                <div class="media-body">
                                    <h5>Pedidos por</h5>
                                    <h3><strong>Remédio</strong></h3>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas h1 fa-pills m-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h4>Alguns dos pedidos de auxílio</h4>
                <p>Listamos alguns casos que você pode atender</p>
            </div>
        </div>
        <div class="row d-flex">
            @include('includes.card_necessidade', ['necessidades' => $necessidades, 'login' => false])
        </div>
    </div>
</section>

@endsection