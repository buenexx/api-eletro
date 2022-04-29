# API ELETRO

Desenvolvi essa API utilizando TDD, sei que poderia ter feito mais testes, a fim de melhorar as validações e até mesmo implantar a parte de autenticação, mas como estou bem corrido neste momento vou entregar assim por enquanto.

Utilizei de recursos como:
- Factories
- Models
- Migration
- seeder
- Controllers

Não tenho muito experiência com SOLID, mas  acredito que posso me dedicar a aprender e utilizar assim como estou aprendendo TDD.

## Segue informações para instalação do projeto e avaliação:
    

### Requisitos

- Laravel 9.x
- Mysql 5.7 || 8.0
- PHP ^8.1.5

## instalação padrão do projeto
[https://laravel.com/docs/9.x/installation](https://laravel.com/docs/9.x/installation)


Instalar dependências do Composer
```
composer install
```

Primeiro criar um arquivo ".env" a partir do exemplo
```
cp .env.example .env
```

Criar uma key
```
php artisan key:generate
```

Crie um banco de dados e coloque as credênciais do banco de dados no arquivo ".env"
```
DB_DATABASE=seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=_sua_senha
```

Faça a migração do banco de dados juntamente com o seeder
```
php artisan migrate --seed
```

Em uma aba do terminal, levantar o servidor
```
php artisan serve
```


### Arquivo para para testes locais via POSTMAN

./api-eletro - Localhost.postman_collection.json
