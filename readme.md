## Aplicação Laravel 5 + AngularJS

### Dependências
* Bower
* Laravel 5
* PHP 5.4+
* Composer

### Instalação
Baixe ou clone esse repositório e extraia numa pasta de sua preferência, e então baixe as dependencias do projeto:
```sh
composer install
```

Copie ou renomei o arquivo <code>.env.example</code> para <code>.env</code> e configure ali seu banco de dados,
essa aplicação já vem com um banco de testes em SQLite, basta alterar o <code>DB_DRIVER</code> para <code>sqlite</code>: 
<code>DB_DRIVER=sqlite</code>.

Em seguida, você terá que gerar uma chave de criptografia para a aplicação:
```sh
php artisan key:generate
```

E pronto, para testar a aplicação ative o servidor:
```sh
php artisan serve
```
Por padrão ele vai tentar rodar na porta 8000, mas voce pode mudar isso especificando a porta:
Porta 9000:
```sh
php artisan serve --port=9000
```

Porta 80:
```sh
php artisan serve --port=80
```

Ou a porta de usa preferência.

### License

[DBAD license](http://www.dbad-license.org/)
