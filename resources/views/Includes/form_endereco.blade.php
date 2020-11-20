    <div>
        <label for="cep">Cep</label>
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
    </div>

    <div>
        <label for="uf">UF</label>
        <select id="uf" name="uf">
            <option selected disabled>Selecione uma opção</option>
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
    </div>

    <input type="hidden" name="ddd" id="ddd" value="">

    <div>
        <label for="cidade">Cidade</label>
        <input name="cidade" type="text" id="cidade" size="40" value="" />
    </div>

    <div>
        <label for="bairro">Bairro</label>
        <input name="bairro" type="text" id="bairro" size="40" value="" />
    </div>

    <div>
        <label for="rua">Rua</label>
        <input name="rua" type="text" id="rua" size="60" value="" />
    </div>

    <div>
        <label for="complemento_endereco">Complemento</label>
        <input type="text" id="complemento_endereco" name="complemento_endereco" placeholder="Nº, Bloco, Ap" value="">
    </div>


    <!-- Adicionando Javascript -->
    <script src="/js/cep.js"></script>
