# Laravel PHP Framework - teste_pratico (referência de estudos)


## O que é este projeto?
O projeto tem como objetivo criar uma api .


## Para rodar este projeto
```bash
$ git clone https://github.com/giovanimessi/teste_pratico
$ cd teste_pratico
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan serve
$ php artisan db:seed #para gerar os seeders, dados de teste
```
Acesssar pela url: 
//exibir todos os dados
http://127.0.0.1:8000/api/cliente

//exibir um cliente
http://127.0.0.1:8000/api/cliente/id

//exibir adicionar cliente
http://127.0.0.1:8000/api/cliente/add

//edicao
http://127.0.0.1:8000/api/cliente/editar/id
//exlusao
http://127.0.0.1:8000/api/cliente/delete/id

/////////////////////////////////////////////////////////////////////////////**** *////////////////////////////////////
http://127.0.0.1:8000/api/pastel //exibi lista
http://127.0.0.1:8000/api/pastel/adicione //exibi lista

<h2>Endpoints</h2>
//pegar todos os dados
Route::get("/cliente",[ClienteController::class,'all']);
//exibir  uma anotacao
Route::get("/cliente/{id}",[ClienteController::class, 'exibiOne']);

//exibir  uma anotacao
Route::post("/cliente/add",[ClienteController::class, 'add']);
//edicao
Route::put('/cliente/edit/{id}',[ClienteController::class, 'edit']);
//exlusao
Route::delete('/cliente/delete/{id}',[ClienteController::class, 'delete']);

/////////////////////////////////////////////////////////////////////////////**** *////////////////////////////////////

Route::get("/pastel",[PastelController::class,'dados']);// exibir dados
Route::post('/pastel/adicione',[PastelController::class, 'adicione']);

Route::put('/pastel/editar/{id}',[PastelController::class, 'editar']); //editar




/////////////////////////////////////////////////////////////////////////////**** *////////////////////////////////////
Route::get("/pedido",[PedidoController::class,'index']);
Route::get("/pedido/{id}",[PedidoController::class,'one']);



_____++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++__________________________________________

## Pré-requisitos
- PHP >= 7.2
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension


##Dependências
###illuminate/html





## Anotações/Extras
As seções a seguir são anotações sobre o framework e podem não refletir a aplicação (blog) em desenvolvimento.


Composer:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
$ sudo chmod -R 777 ~/.composer/cache/
$ sudo composer self-update
```

### Instalação Framework
```bash
$ composer global require "laravel/installer"
```

Exportar o path do laravel para Linux reconhecer os comandos (bash):

1. Incluir no final do arquivo ~/.bashrc: export PATH="~/.composer/vendor/bin:$PATH"

2. Depois executar: 
```bash
$ source ~/.bashrc 
```


### Criação de um projeto clean
```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
```

O último comando serve para testar a instalação, se em localhost:8000 aparecer LARAVEL escrito na página, tudo está ok. Ao utilizar o comando laravel new automaticamente a última versão do Laravel será baixada. Até a escrita deste documento o comando configura o Laravel 5.2. Caso deseja instalar laravel 5.1 LTS, substitua aquele primeiro comando por:
```bash
$ composer create-project --prefer-dist laravel/laravel nome-do-projeto 5.1.*
```

### Artisan
- Sistema de comandos do Laravel. Help em:
```bash
$ php artisan
```
- Remover arquivos de cache criado pelo Laravel:
```bash
$ php artisan clear-compiled 
```
- Colocar sistema em modo manutenção:
```bash
$ php artisan down 
```

### Estruturas importantes
- app/Http/routes.php: arquivo que define as rotas da aplicação.
- app/Http/Controllers: ficam os controllers da aplicação, o comando para gerar uma estrutura de um controlador é:
```bash
$ php artisan make:controller TestController
```
- resources: ficam as views da aplicação. Deixe imagens, CSS, JS e fontes na /public.
- As Models serão criadas na raiz de /app, para gerar uma model:
```bash
$ php artisan make:model Post
```
