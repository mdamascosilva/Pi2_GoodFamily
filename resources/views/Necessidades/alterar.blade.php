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
            <h2>Nos informe suas necessidades a seguir!</h2>
            <div class="form">
                <form action="/necessidade/alterar/" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <select id="categoria" name="categoria">
                            <option selected disabled>Selecione uma opção</option>
                            
                            @foreach($categoria as $cat)
                                <option key="{{ $cat->id }}" value="{{ $cat->id }}" >{{ $cat->categoria}}</option>
                            @endforeach
                    
                        </select>
                    </div>

                    <div>
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao" rows='10' cols='80' placeholder="Descrição" required></textarea>    
                    </div>

                    <div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>