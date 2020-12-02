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
            '<div class="col-12 col-md-4 mb-4 mt-2">' +
                '<div class="card h-100 border-light bg-light shadow">' +
                    '<h6 class="card-header">' + necessidade.categoria + '</h6>' +
                    '<div class="card-body">' +
                        '<h5 class="card-title mb-3">' + necessidade.descricao + '</h5>' +
                        '<p class="card-text">' + necessidade.cidade + ', bairro ' + necessidade.bairro + '</p>' +
                            '<div class="d-flex align-items-center align-self-end">' +
                                '<div class="meta-item m-2">' +
                                '<a href="/registrar/apoiador"><i class="fas fa-heart m-1"></i>Quero ajudar</a>' +
                            '</div>' +
                            '<div class="meta-item m-2">' +
                                '<a href="/necessidades/consultar/' + necessidade.id + '"><i class="fas fa-link m-1"></i>Detalhes</a>' +
            '</div></div></div></div>';
    });
}