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
            <h2>Login</h2>
            <div class="form">
                <form action="/login" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    
                    <div>
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div>
                        <label for="remember">Lembrar-me</label>
                        <input type="checkbox" id="remember" name="remember">
                    </div>
                
                    <div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>