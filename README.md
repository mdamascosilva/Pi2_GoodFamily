<h1>Projeto Good Family</h1>

## **Sobre o Projeto**
Este projeto é um trabalho acadêmico para a disciplina Projeto Integrador II, do curso de Análise e Desenvolvimento de Sistemas, do Centro Universitário Municipal de São José. O objetivo do projeto é criar uma plataforma digital para conectar famílias estrangeiras, ONGs, instituições e pessoas com a intenção de ajudar essas famílias desamparadas, e auxiliá-las a se estabelecer no país

## **Sobre o Sistema**
O sitema foi desenvolvido na linguagem livre e open-source PHP, utilizando o framework LARAVEL. Integrando o Laravel ao MYSQL para criação e configuração do Banco de Dados Relacional. E para a interface visual do sistema foi utilizado o framework BOOTSTRAP, que desenvolve componentes com HTML, CSS e JavaScript

## **Sobre o Laravel**
Laravel é um framework de aplicação web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa para ser verdadeiramente gratificante. O Laravel tira a dor do desenvolvimento facilitando tarefas comuns usadas em muitos projetos da web.

## **Infra-estrutura necessária**
Para rodar a aplicação na sua maquina, é necessário a instalação das seguintes tecnologias:
- Php       (version 7.4.3)
- Laravel   (version 8)
- Composer  (version 1.10.13)
- MYSQL     (version 8.0.22)

## **Como utilizar**

Para utilização do sistema, é necessário "clonar" o projeto pelo GIT para a máquina local e a crir um Banco de Dados MYSQL com o nome "good_family". 
```
- Clonar o projeto:
$ git clone https://github.com/mdamascosilva/Pi2_GoodFamily.git

- Entrar no repositório do Projeto:
$ cd Pi2_GoodFamily
```
Configurar Ambiente MYSQL. No arquivo .env
```
 DB_CONNECTION="Digite a conexão"
 DB_HOST="Digite o Host"
 DB_PORT="Digite a Porta"
 DB_DATABASE="Digite o nome doBbanco de Dados"
 DB_USERNAME="Digite o Usuário"
 DB_PASSWORD="Digite a Senha"

```
Após a clonagem do projeto e criação do Banco de Dados "good_family", executar os comandos no diretório em que se encontra o projeto para configuração do Banco de Dados.
```
# Criar tabelas e migrar configurações do projeto para o banco de dados:
$ php artisan migrate

# Configurar tabelas pré-definidas pelo projeto:
$ php artisan db:seed
```
## **Inicializando o Servidor**
Para inicializar o servidor é necessário rodar o comando abaixo no diretório do projeto:

    $ php artisan serve

Podendo ser acessado pela url:

    http://127.0.0.1:8000

## **Colaboradores**
https://github.com/alysonmestevao

https://github.com/luksdvlp

https://github.com/mdamascosilva

https://github.com/UlyssesWerlich

## **Agradecimentos**
Para a realização deste projeto, queremos agradecer aos professores do Centro Universitário Municipal de São José, por todo o conhecimento e contribuição ao longo do curso. Em específico ao Professor Osmar da Cunha Filho, que ministrou a disciplina Projeto Integrador II, onde tivemos a oportunidade de desenvolver esse projeto.