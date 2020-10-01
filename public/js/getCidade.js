function getCidades(){
    var estado = document.getElementById('estado').value;
    var select = document.getElementById('cidade');
    var xmlreq = CreateRequest();
    xmlreq.open("GET", "/cidade/" + estado, true);

    xmlreq.onreadystatechange = function(){

        select.innerHTML = "<option selected disabled>Selecione uma opção</option>";

            if (xmlreq.readyState === 4 && xmlreq.status == 200){
                response = JSON.parse(xmlreq.responseText);

                cidades = response[0].cidades;

                cidades.map(function(cidade){
                    select.innerHTML += "<option value='" + cidade.id + "' key='' >" + cidade.cidade + "</option>"; 
                });

            } else {
                select.innerHTML = "<option value='' disabled hidden>Erro ao carregar</option>";
            }
        };

    xmlreq.send(null);
}