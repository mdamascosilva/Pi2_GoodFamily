<!DOCTYPE html>
<html>
    <head>
        <title>ContactMe</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>

    <body>
        <div class="header">
            <h1>Good Family</h1>
        </div>

        <div class="menu">
            <p><a href="/beneficiario/cadastrar">Cadastrar beneficiario</a></p>
            <p><a href="/beneficiario/listar">Listar beneficiarios</a></p>
        </div>

        @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <div class="container">
            <h2>Beneficiário</h2>
            <div class="form">
                @if ($beneficiario)

                    <div>
                        <p>CPF</p>
                        <p>{{ $beneficiario->cpf }}</p>
                    </div>
                    
                    <div>
                        <p>Telefone</p>
                        <p>{{ $beneficiario->telefone }}</p>
                    </div>
                    
                    <div>
                        <p>Endereço</p>
                        <p>{{ $beneficiario->endereco }}</p>
                    </div>
                    
                    <div>
                        <p>Cidade</p>
                        <p>{{ $beneficiario->cidade }}</p>
                    </div>
                    
                    <div>
                        <p>Estado</p>
                        <p>{{ $beneficiario->estado }}</p>
                    </div>
                    
                    <div>
                        <p>CEP</p>
                        <p>{{ $beneficiario->cep }}</p>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>