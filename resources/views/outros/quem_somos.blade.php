@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Quem somos
@endsection

@section('conteudo')

Nosso time possui envolvimento com a área social e é formado por profissionais com experiência e formação em diversas áreas, desde administração e contabilidade até ramos tecnológicos na área de desenvolvimento e infraestrutura de TI bem como das Telecomunicações, o que fortalece consideravelmente o desenvolvimento do projeto

Alyson Martins Estevão, 26 anos e atualmente cursando a 5° fase do curso de ADS na USJ. Atleta desde muito cedo, sou apaixonado por esportes em geral, principalmente futebol como um todo e handebol onde fui atleta por 10 anos. Sempre interessado pela área de exatas, fiz a graduação no curso de Ciências Contábeis também pela USJ. Trabalhando há 5 anos em uma empresa de tecnologia fundada em Florianópolis, conheci esse mundo  e me encantei, assim fui procurar formação na área e sigo procurando novos desafios profissionais dentro da companhia.


Lucas Gustavo Machado, 29 anos, casado, pai da Lívia de 4 anos, acadêmico da 5º fase do curso de Análise e Desenvolvimento de Sistemas, sempre acompanhei o desenvolvimento das tecnologias e sempre muito curioso desde pequeno sobre a área. Trabalhei por 3 anos no comércio em geral e após isso trabalhei 5 anos como auxiliar de escritório que foi quando acabei caindo na realidade e vi que o que eu queria era trabalhar em coisas envolvendo a tecnologia. Atualmente sou Analista de Suporte na Code7 onde estagiei por 1 ano e acabei sendo efetivado em seguida.
Gosto muito de escutar música, em geral rock, quando tenho tempo sempre dou uma moral para o video game, sempre apaixonado pelos consoles da Sony e seus exclusivos, também gosto muito de curtir minha filha e minha esposa.


Marcelo Damasco da Silva, 42 anos, casado, pai de um casal de crianças, sendo Kauan com 16 anos e Isadora com 7. Formado em Administração e no curso técnico de Telecomunicações, atuei por 15 anos neste segmento prestando serviços ligados a área de comutação de grandes operadoras nacionais de telefonia. 
Atualmente trabalho como servidor público na Secretaria de Saúde do Estado de Santa Catarina, exercendo a função de técnico de TI em um de seus órgãos, prestando todo suporte de informática aos clientes internos.
Como hobby gosto de curtir a família e brincar com os filhos, pescar com o pai, além de estar sempre disposto a aprender e a inventar algo nas horas de folga, sendo o próximo projeto a construção de uma chopeira.
@endsection