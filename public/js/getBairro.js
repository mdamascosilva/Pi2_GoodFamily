function getBairros(){
    var cidade = document.getElementById('cidade').value;
    var select = document.getElementById('bairro');
    var xmlreq = CreateRequest();
    xmlreq.open("GET", "/bairro/" + cidade, true);

    xmlreq.onreadystatechange = function(){
    
        select.innerHTML = "<option selected disabled>Selecione uma opção</option>";

            if (xmlreq.readyState === 4 && xmlreq.status == 200){

                response = JSON.parse(xmlreq.responseText);

                bairros = response[0].bairros;

                bairros.map(function(bairro){
                    select.innerHTML += "<option value='" + bairro.id + "' key='"+ bairro.id +"' >" + bairro.bairro + "</option>"; 
                });

            } else {
                select.innerHTML = "<option disabled selected>Erro ao carregar</option>";
            }
        };

    xmlreq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlreq.send(null);
}