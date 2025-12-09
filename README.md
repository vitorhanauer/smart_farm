# Smart Farm Monitor
O projeto consiste em uma aplicação para uma Smart Farm IOT. Capturando os dados dos sensores, acionando os atuadores. A aplicação conta com um sistema de Login com variação de função, possuindo a função professor ou aluno. Alunos possuem acesso apenas ao dashboard enquanto que professores possuem acesso a toda a aplicação.

## Requisitos para execução
Para execução da aplicação é necessário ter instalado os seguintes componentes:

- PHP: ^8.4.x
- Composer: ^2.8.x
- NodeJS: ^24.11.x

Após ter instalado os requisitos acima, execute os comando abaixo:

```
git clone https://github.com/vitorhanauer/smart_farm.git
cd smart_farm
composer install
npm install
```

*Provavelmente ao rodar composer install irá aparecer alguns erros de falta de depedência, instale as depêndencias que for necessárias.

Copie o arquivo .env.example para .env e configure corretamente o IP da Smart Farm, após isso rode os seguintes comandos:


```
php artisan key:generate
php artisan migrate --seed
php artisan schedule:work
composer run dev
```

Duas contas já vem criadas com a aplicação:
- student@example.com
- teacher@example.com

A senha de ambas é password

Após isso basta acessar https://localhost:8000/