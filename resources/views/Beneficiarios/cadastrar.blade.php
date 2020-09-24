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
            <h2>Ótimo</h2>
            <h2>Agora, precisamos de algumas informações para fazer o cadastro de beneficiário</h2>
            <div class="form">
                <form action="/beneficiario/cadastrar/{{ $user->id }}" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="email" value="{{ $user->email ?? '' }}">

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" value="{{ $user->name }}" name="nome">
                    </div>
                    
                    <div>
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf">
                    </div>
                    
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone">
                    </div>
                    
                    <div>
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco">
                    </div>

                    <div>
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    
                    <div>
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    
                    <div>
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    
                    <div>
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep">
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>