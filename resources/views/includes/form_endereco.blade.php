    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="cep">Cep</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ $usuario->cep ?? '' }}" maxlength="9" onblur="pesquisacep(this.value);" required />
        </div>
        <div class="invalid-feedback">
            Por favor informe o cep da sua rua
        </div>

        <div class="col-md-3 mb-3">
            <label for="uf">UF</label>
            <select class="custom-select" id="uf" name="uf" required>
                <option key="1" value="AC">Acre</option>
                <option key="2" value="AL">Alagoas</option>
                <option key="3" value="AP">Amapá</option>
                <option key="4" value="AM">Amazonas</option>
                <option key="5" value="BA">Bahia</option>
                <option key="6" value="CE">Ceará</option>
                <option key="7" value="ES">Espirito Santo</option>
                <option key="8" value="GO">Goias</option>
                <option key="9" value="MA">Maranhão</option>
                <option key="10" value="MT">Mato Grosso</option>
                <option key="11" value="MS">Mato Grosso do Sul</option>
                <option key="12" value="MG">Minas Gerais</option>
                <option key="13" value="PA">Pará</option>
                <option key="14" value="PB">Paraíba</option>-->
                <option key="15" value="PR">Paraná</option>
                <option key="16" value="PE">Pernambuco</option>
                <option key="17" value="PI">Piauí</option>
                <option key="18" value="RJ">Rio de Janeiro</option>
                <option key="19" value="RN">Rio Grande do Norte</option>
                <option key="20" value="RS">Rio Grande do Sul</option>
                <option key="21" value="RO">Rondônia</option>
                <option key="22" value="RR">Roraima</option>
                <option key="23" value="SC">Santa Catarina</option>
                <option key="24" value="SP">São Paulo</option>
                <option key="25" value="SE">Sergipe</option>
                <option key="26" value="TO">Tocantins</option>
                <option key="26" value="DF">Distrito Federal</option>
            </select>
            <div class="invalid-feedback">
                Por favor informe o estado
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" size="40" value="{{ $usuario->cidade ?? '' }}" required />
            <div class="invalid-feedback">
                Por favor informe a cidade onde você mora
            </div>
        </div>
    </div>

    <input type="hidden" name="ddd" id="ddd" value="{{ $usuario->ddd ?? '' }}" required/>

    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" size="40" value="{{ $usuario->bairro ?? '' }}" required/>
            <div class="invalid-feedback">
                Por favor informe o seu bairro
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" size="60" value="{{ $usuario->rua ?? '' }}" required/>
            <div class="invalid-feedback">
                Por favor informe a sua rua
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <label for="complemento_endereco">Complemento</label>
            <input type="text" class="form-control" id="complemento_endereco" name="complemento_endereco" placeholder="Nº, Bloco, Ap" value="{{ $usuario->complemento_endereco ?? '' }}" required>
            <div class="invalid-feedback">
                Por favor informe o complemento do seu endereço
            </div>
        </div>
    </div>

    <script src="/js/cep.js"></script>
    <script>
        document.getElementById('uf').value = '<?php echo $usuario->uf ?? '' ?>';
    </script>