<!DOCTYPE html>
<html>
    <head>
        <title>Good Family</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>

    <body>
        <div class="header">
            <h1>Good Family</h1>
        </div>

        <div class="container">
            <h2>Ops...</h2>
            <h2>Identificamos que foi feito já um cadastro de {{ $user->user_type }} para esse e-mail, </h2>
            <h2>mas falta algumas informações.</h2>
            <div class="form">
                <h2><a href="/{{ $user->user_type }}/cadastrar/{{ $user->id }}">Ok, completar informações</a></h2>
            </div>
        </div>
    </body>
</html>