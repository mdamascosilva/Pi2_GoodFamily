<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form_auth.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Good Family</title>

</head>

<body>

    <form class="form-signin text-center needs-validation" novalidate action="/registrar/{{$opcao}}" method="POST">
        <h1 class="h2 mb-3 font-weight-normal">Good Family</h1>
        <h2 class="h4 mb-3 font-weight-normal">Cadastro de {{( $opcao == 'beneficiario' ) ? ( 'beneficiário' ) : ( $opcao)}}</h2>

        @include('includes.errors', ['errors' => $errors])

        @include('includes.mensagem', ['mensagem' => $mensagem ?? ''])

        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-2">
                <label for="nome">Nome</label>
                <input type="nome" class="form-control" id="nome" name="nome" required autofocus>
                <div class="invalid-feedback">
                    Por favor informe seu nome
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-2">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Por favor informe seu E-mail
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-2">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8" required>
                <div class="invalid-feedback">
                    Por favor informe sua senha (mínimo 8 caracteres)
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-2">
                <label for="confirm">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirm" name="confirm" required>
                <div class="invalid-feedback">
                    Por favor informe a confirmação de sua senha
                </div>
            </div>
        </div>

        <div class="checkbox mb-2">
            <label>
                <input type="checkbox" value="remember"> Lembrar-me
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        <a href="/login/{{$opcao}}" class="btn btn-lg btn-info btn-block" role="button" style="margin-top: 10px;">Já tenho login</a>

        <p class="mt-2 mb-2 text-muted">&copy; 2017-2020</p>
    </form>

    <script src="/js/validation.js"></script>
</body>
</html>