# gdepi-laravel

A aplicação consiste em um gerenciador de distribuição de equipamentos de proteção individual.

# Funcionalidades

- Cadastrar administrador afim de controlar os acessos a aplicação;
- Cadastrar, alterar, listar e deletar colaboradores e EPIs;
- Gerar um solicitação feita por um colaborador dos EPIS;
- Gerar realtorio para ser impresso e assinado pelos colaboradore;

# Requisitos para rodar a aplicação

- PHP >= 7.3
- Composer

# Como rodar esta aplicação

- _git clone https://github.com/spindola001/gdepi-laravel.git_;
- Crie um banco de dados MySql nomeado de gdepi01_db
- Inicie o servidor PHP

## No diretório da aplicação:

- Rode o comando:
  - _composer install_
  - _php artisan key:generate_
  - _php artisan migrate_
  - _php artisan serve_

