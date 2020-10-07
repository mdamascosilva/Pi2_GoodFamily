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
            <div class="lista">
                @foreach($apoiadores as $apoiador)
                
                    <div class="bloco">
                        <div class="linha">
                            <p>Nome</p>
                            <p><a href="/apoiador/consultar/{{ $apoiador->id }}">
                                {{ $apoiador->nome }}
                                </a>
                            </p>
                        </div>

                        <div class="linha">
                            <p>Telefone</p>
                            <p>{{ $apoiador->telefone }}</p>
                        </div>

                        <div class="linha">
                            <p>Cidade</p>
                            <p>{{ $apoiador->cidade }}</p>
                        </div>

                        <div class="linha">
                            <p>Estado</p>
                            <p>{{ $apoiador->estado }}</p>
                        </div>

                    </div>
                    <br/>
                @endforeach
            </div>
        </div>
    </body>
</html>