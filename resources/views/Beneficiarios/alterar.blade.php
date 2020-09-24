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
            <h2>Alterar dados cadastrados</h2>
            <div class="form">
                @if ($beneficiario)
                <form action="/beneficiario/alterar/{{ $beneficiario->id }}" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ $beneficiario->nome }}">
                    </div>
                    
                    <div>
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ $beneficiario->cpf }}">
                    </div>
                    
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" value="{{ $beneficiario->telefone }}">
                    </div>
                    
                    <div>
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco" value="{{ $beneficiario->endereco }}">
                    </div>
                    
                    <div>
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" value="{{ $beneficiario->cidade }}">
                    </div>
                    
                    <div>
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" value="{{ $beneficiario->estado }}">
                    </div>
                    
                    <div>
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" value="{{ $beneficiario->cep }}">
                    </div>
                    
                    
                    <div>
                        <button type="submit" class="btn btn-default">Alterar</button>
                    </div>
                </form>

                    <div>
                        <form action="/beneficiario/excluir/{{ $beneficiario->id }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">Excluir</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>