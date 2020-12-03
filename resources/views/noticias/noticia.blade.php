@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Notícias
@endsection

@section('conteudo')

<div class="card mb-3 border-light bg-light shadow">
  <img class="card-img-top" src="/images/noticias/img1.jpg" alt="Indígenas venezuelanos no abrigo improvisado em Boa Vista">
  <div class="card-body">
    <h4 class="card-title">“Na Venezuela não há comida, mas no Brasil sim”: a nova fuga da fome na fronteira do norte</h4>
    <h5 class="card-text">Escassez de alimentos e crise econômica fazem explodir os pedidos de refúgio de venezuelanos no Brasil e causam impasse para as autoridades brasileiras.</h5>
    <p class="card-text"><small class="text-muted">El país - 13/03/2017</small></p>
    <a href="https://brasil.elpais.com/brasil/2017/03/11/politica/1489193658_888279.html"><i class="fas fa-link m-1"></i>Ir para a notícia</a>
  </div>
</div>

<div class="card mb-3 border-light bg-light shadow">
  <img class="card-img-top" src="/images/noticias/img2.jpg" alt="Percurso entre Georgetown e Bonfim inclui viagem de balsa para travessia do rio Esquibo">
  <div class="card-body">
    <h4 class="card-title">Nova onda de haitianos chega ao Brasil pela Guiana e engrossa êxodo de estrangeiros em Roraima</h4>
    <h5 class="card-text">Até novembro, mais de 13 mil imigrantes vindos do Haiti entraram no país pela fronteira da Guiana, em Bonfim (RR) foram 993 em 2018; mesma rota trouxe 31 mil cubanos desde 2018. Estado também é porta de entrada do êxodo venezuelano ao Brasil.</h5>
    <p class="card-text"><small class="text-muted">G1 - 16/12/2019</small></p>
    <a href="https://g1.globo.com/rr/roraima/noticia/2019/12/16/nova-onda-de-haitianos-chega-ao-brasil-pela-guiana-e-engrossa-exodo-de-estrangeiros-em-roraima.ghtml"><i class="fas fa-link m-1"></i>Ir para a notícia</a>
  </div>
</div>

<div class="card mb-3 border-light bg-light shadow">
  <img class="card-img-top" src="/images/noticias/img4.jpeg" alt="De 2010 a 2018, 774,2 mil imigrantes foram registrados no Brasil, sendo haitianos, venezuelanos e colombianos">
  <div class="card-body">
    <h4 class="card-title">Sem políticas públicas efetivas, imigrantes sobrevivem da solidariedade.</h4>
    <h5 class="card-text">Pandemia agravou a situação de vulnerabilidade das pessoas que buscaram no Brasil uma forma de reconstruir suas vidas.</h5>
    <p class="card-text"><small class="text-muted">Brasil de fato - 28/06/2020</small></p>
    <a href="https://www.brasildefato.com.br/2020/06/28/sem-politicas-publicas-efetivas-imigrantes-sobrevivem-da-solidariedade"><i class="fas fa-link m-1"></i>Ir para a notícia</a>
  </div>
</div>

<div class="card mb-3 border-light bg-light shadow">
  <img class="card-img-top" src="/images/noticias/img5.jpg" alt="Travessia da fronteira entre Brasil e Venezuela, em foto de 2019">
  <div class="card-body">
    <h4 class="card-title">Número de refugiados no Brasil aumenta mais de 7 vezes no semestre; maioria é de venezuelanos</h4>
    <h5 class="card-text">Cerca de 43 mil estrangeiros vivem no Brasil com a condição de refúgio. Desse total, quase 90% vieram da Venezuela. Com a pandemia do novo coronavírus, porém, número de pessoas que pedem refúgio às autoridades brasileiras deve diminuir.</h5>
    <p class="card-text"><small class="text-muted">G1 - 09/06/2020</small></p>
    <a href="https://g1.globo.com/mundo/noticia/2020/06/09/numero-de-refugiados-no-brasil-aumenta-mais-de-7-vezes-no-semestre-maioria-e-de-venezuelanos.ghtml"><i class="fas fa-link m-1"></i>Ir para a notícia</a>
  </div>
</div>

<div class="card mb-3 border-light bg-light shadow">
  <img class="card-img-top" src="/images/noticias/img3.png" alt="Bom Dia Brasil mostra o caos no Haiti após passagem do furacão Matthew">
  <div class="card-body">
    <h4 class="card-title">Bom Dia Brasil mostra o caos no Haiti após passagem do furacão Matthew</h4>
    <h5 class="card-text">Matthew ainda oferece risco, com alagamentos e ventos de 120 km/h. Carolina do Norte (EUA) enfrenta enchente e o país segue em alerta.</h5>
    <p class="card-text"><small class="text-muted">G1 - 10/10/2016</small></p>
    <a href="http://g1.globo.com/bom-dia-brasil/noticia/2016/10/bom-dia-brasil-mostra-o-caos-no-haiti-apos-passagem-do-furacao-matthew.html"><i class="fas fa-link m-1"></i>Ir para a notícia</a>
  </div>
</div>

@endsection