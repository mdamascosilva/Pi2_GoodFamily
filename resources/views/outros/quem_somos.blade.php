@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Quem somos
@endsection

@section('conteudo')
<div class="card mt-4 mb-4">
    <div class="card-body">
        <h5>
            Nosso time possui envolvimento com a área social e é formado por profissionais com experiência e formação em diversas áreas, desde administração e contabilidade até ramos tecnológicos na área de desenvolvimento e infraestrutura de TI bem como das Telecomunicações, o que fortalece consideravelmente o desenvolvimento do projeto.
        </h5>
    </div>
</div>


<div>
    <h3 class="mt-4 mb-4">Equipe</h3>
</div>
<div class="card mt-4 mb-4">
    <div class="row no-gutters">
        <div class="col-sm-3" style="background: #ddd;">
            <img src="/images/desenvolvedores/alyson.png" class="card-img-top h-150" alt="...">
        </div>
        <div class="col-sm-9">
            <div class="card-body">
                <h5 class="card-title">Alyson Martins Estevão</h5>
                <p class="card-text">Alyson, 26 anos e atualmente cursando a 5° fase do curso de ADS na USJ. Atleta desde muito cedo, sou apaixonado por esportes em geral, principalmente futebol como um todo e handebol onde fui atleta por 10 anos. Sempre interessado pela área de exatas, fiz a graduação no curso de Ciências Contábeis também pela USJ. Trabalhando há 5 anos em uma empresa de tecnologia fundada em Florianópolis, conheci esse mundo e me encantei, assim fui procurar formação na área e sigo procurando novos desafios profissionais dentro da companhia.</p>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4 mb-4">
    <div class="row no-gutters">
        <div class="col-sm-9">
            <div class="card-body">
                <h5 class="card-title">Lucas Gustavo Machado</h5>
                <p class="card-text">Lucas, de 29 anos, é casado, pai da Lívia de 4 anos, acadêmico da 5º fase do curso de Análise e Desenvolvimento de Sistemas, sempre acompanhei o desenvolvimento das tecnologias e sempre muito curioso desde pequeno sobre a área. Trabalhei por 3 anos no comércio em geral e após isso trabalhei 5 anos como auxiliar de escritório que foi quando acabei caindo na realidade e vi que o que eu queria era trabalhar em coisas envolvendo a tecnologia. Atualmente sou Analista de Suporte na Code7 onde estagiei por 1 ano e acabei sendo efetivado em seguida. Gosto muito de escutar música, em geral rock, quando tenho tempo sempre dou uma moral para o video game, sempre apaixonado pelos consoles da Sony e seus exclusivos, também gosto muito de curtir minha filha e minha esposa.</p>
            </div>
        </div>
        <div class="col-sm-3" style="background: #ddd;">
            <img src="/images/desenvolvedores/lucas.png" class="card-img-top h-150" alt="...">
        </div>
    </div>
</div>

<div class="card mt-4 mb-4">
    <div class="row no-gutters">
        <div class="col-sm-3" style="background: #ddd;">
            <img src="/images/desenvolvedores/marcelo.png" class="card-img-top h-150" alt="...">
        </div>
        <div class="col-sm-9">
            <div class="card-body">
                <h5 class="card-title">Marcelo Damasco da Silva</h5>
                <p class="card-text">Marcelo, 42 anos, casado, pai de um casal de crianças, sendo Kauan com 16 anos e Isadora com 7. Formado em Administração e no curso técnico de Telecomunicações, atuei por 15 anos neste segmento prestando serviços ligados a área de comutação de grandes operadoras nacionais de telefonia.
                    Atualmente trabalho como servidor público na Secretaria de Saúde do Estado de Santa Catarina, exercendo a função de técnico de TI em um de seus órgãos, prestando todo suporte de informática aos clientes internos.
                    Como hobby gosto de curtir a família e brincar com os filhos, pescar com o pai, além de estar sempre disposto a aprender e a inventar algo nas horas de folga, sendo o próximo projeto a construção de uma chopeira.</p>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4 mb-4">
    <div class="row no-gutters">
        <div class="col-sm-9">
            <div class="card-body">
                <h5 class="card-title">Ulysses Werlich Borges</h5>
                <p class="card-text">Olá! Sou Ulysses, tenho 24 anos, sou casado com a Priscila Schlemper. Trabalho na everis como desenvolvedor junior em java, e atuo nos projetos do banco Santander. Estou terminando a faculdade de Análise e Desenvolvimento de Sistemas, na USJ, e após isso quero focar na meta de um dia me tornar
                    professor de programação. Além de ter como hobby a programação, gosto de assistir séries com a minha esposa, de tocar teclado, e de curtir uma boa trilha com destino pra alguma cachoeira. Também amo me envolver nos trabalhos da comunidade cristã no qual faço parte.
                </p>
            </div>
        </div>
        <div class="col-sm-3" style="background: #ddd;">
            <img src="/images/desenvolvedores/ulysses.png" class="card-img-top h-150" alt="...">
        </div>
    </div>
</div>

@endsection