function getNecessidades() {
    var categoria = document.getElementById("categoria").value
    var cidade = document.getElementById("cidade").value;
    var bairro = document.getElementById("bairro").value;
    var divNecessidades = document.getElementById("necessidades");

    if (categoria != "%%" || cidade.length > 5 || bairro.length > 5) {

        var request = getRequest();
        
        request.open("GET", "/necessidades/pesquisar-necessidades?" +
            "categoria=" + categoria +
            "&cidade=" + cidade +
            "&bairro=" + bairro);
        
        request.onreadystatechange = function () {

            if (request.readyState === 4 && request.status == 200) {
                divNecessidades.innerHTML = '';
                necessidades = JSON.parse(request.responseText);
                gerarCardNecessidades(necessidades);
            } else {
                divNecessidades.innerHTML = "Erro: " + request.statusText;
            }
        };
        request.send(null);
    } else {
        divNecessidades.innerHTML = '';
        alert('Necessário preencher pelo menos uma informação para consulta')
    }
}

function gerarCardNecessidades(necessidades) {
    var divNecessidades = document.getElementById("necessidades");

    necessidades.map(function (necessidade) {
        divNecessidades.innerHTML +=
            '<div class="bloco">' +
            '<div class="linha">' +
            '<a href="/necessidades/consultar/' + necessidade.id + '">Detalhes</a>' +
            '</div>' +
            '<div class="linha">' +
            '<p>Categoria</p><p>' + necessidade.categoria + '</p>' +
            '</div>' +
            '<div class="linha">' +
            '<p>Descrição</p><p>' + necessidade.descricao + '</p>' +
            '</div>' +
            '<div class="linha">' +
            '<p>Cidade</p><p>' + necessidade.cidade + '</p>' +
            '</div>' +
            '<div class="linha">' +
            '<p>Bairro</p><p>' + necessidade.bairro + '</p>' +
            '</div>' +
            '</div>';
    });
}