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

        @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
        @endif

        @if ($mensagem ?? '')
            <div class="alert alert-danger">
                <ul>
                    <li> {{ $mensagem }} </li>
                </ul>
            </div>
        @endif

        <div class="container">
            <h2>Alterar senha</h2>
            <div class="form">
                <form action="/senha" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    
                    <div>
                        <label for="senha_atual">Senha atual</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div>
                        <label for="password">Nova senha</label>
                        <input type="password" id="new_password" name="new_password">
                    </div>

                    <div>
                        <label for="confirm">Confirmar nova senha</label>
                        <input type="password" id="confirm_password" name="confirm_password">
                    </div>
                
                    <div>
                        <button type="submit" class="btn btn-default">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>