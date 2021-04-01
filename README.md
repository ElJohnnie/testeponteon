
<h1 align="center">Ponteon - Teste para Vaga de Desenvolvedor Web</h1>
<p align="center"><strong>Instalação:</strong></p>
Requisitos: Composer e Laravel instalados em seu ambiente.

Rode em seu terminal:
```
$ cd testeponteon
$ composer install/update
$ composer dumpautoload
$ cp .env.example .env
```
No arquivo .env, edite as linhas de acordou com o seu banco de dados, segue o exemplo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testeponteon
DB_USERNAME=root
DB_PASSWORD=
```
*as credenciais de exemplo acima estão rodando em servidor local.

Com o database conectado, rode as migrations com a sequência de comandos em seu terminal na raiz do projeto:
```
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
```