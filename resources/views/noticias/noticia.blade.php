@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Notícias
@endsection

@section('conteudo')

<div>
    https://brasil.elpais.com/brasil/2017/03/11/politica/1489193658_888279.html
</div>

<div>
    https://g1.globo.com/rr/roraima/noticia/2019/12/16/nova-onda-de-haitianos-chega-ao-brasil-pela-guiana-e-engrossa-exodo-de-estrangeiros-em-roraima.ghtml
</div>

<div>
    http://g1.globo.com/bom-dia-brasil/noticia/2016/10/bom-dia-brasil-mostra-o-caos-no-haiti-apos-passagem-do-furacao-matthew.html
</div>

<div>
    https://www.brasildefato.com.br/2020/06/28/sem-politicas-publicas-efetivas-imigrantes-sobrevivem-da-solidariedade
</div>

<div>
    https://g1.globo.com/mundo/noticia/2020/06/09/numero-de-refugiados-no-brasil-aumenta-mais-de-7-vezes-no-semestre-maioria-e-de-venezuelanos.ghtml
</div>

@endsection