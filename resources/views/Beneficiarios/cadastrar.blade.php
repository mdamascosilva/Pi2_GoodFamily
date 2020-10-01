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
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep">
                    </div>

                    <div>
                        <label for="estado">Estado</label>

                        <select onchange="getCidades()" id="estado" name="estado">
                            <option selected disabled>Selecione uma opção</option>
                            
                            <option key="1" value="AC" >Acre</option>
                            <option key="2" value="AL" >Alagoas</option>
                            <option key="3" value="AP" >Amapá</option>
                            <option key="4" value="AM" >Amazonas</option>
                            <option key="5" value="BA" >Bahia</option>
                            <option key="6" value="CE" >Ceará</option>
                            <option key="7" value="ES" >Espirito Santo</option>
                            <option key="8" value="GO" >Goias</option>
                            <option key="9" value="MA" >Maranhão</option>
                            <option key="10" value="MT" >Mato Grosso</option>
                            <option key="11" value="MS" >Mato Grosso do Sul</option>
                            <option key="12" value="MG" >Minas Gerais</option>
                            <option key="13" value="PA" >Pará</option>
                            <option key="14" value="PB" >Paraíba</option>
                            <option key="15" value="PR" >Paraná</option>
                            <option key="16" value="PE" >Pernambuco</option>
                            <option key="17" value="PI" >Piauí</option>
                            <option key="18" value="RJ" >Rio de Janeiro</option>
                            <option key="19" value="RN" >Rio Grande do Norte</option>
                            <option key="20" value="RS" >Rio Grande do Sul</option>
                            <option key="21" value="RO" >Rondônia</option>
                            <option key="22" value="RR" >Roraima</option>
                            <option key="23" value="SC" >Santa Catarina</option>
                            <option key="24" value="SP" >São Paulo</option>
                            <option key="25" value="SE" >Sergipe</option>
                            <option key="26" value="TO" >Tocantins</option>
                            <option key="26" value="DF" >Distrito Federal</option>
                        </select>
                    </div>

                    <div>
                        <label for="cidade">Cidade</label>
                        <select onchange="getBairros()" id="cidade" name="cidade">
                            <option selected disabled>-</option>
                        </select>
                    </div>

                    <div>
                        <label for="bairro">Bairro</label>
                        <select id="bairro" name="bairro">
                            <option selected disabled>-</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco">
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <script src='/js/request.js'></script>
        <script src='/js/getCidade.js'></script>
        <script src='/js/getBairro.js'></script>
    </body>
</html>