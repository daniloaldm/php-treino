#  Índice

* Descrição
* Condições do Projeto
* Instalação
* Execução
* Autor

#  Descrição

O dono de um estabelecimento solicitou que fosse desenvolvido uma aplicação, no qual
fosse possível manipular uma lista de tarefas contendo informações úteis para ele.
Após um levantamento de informações com o cliente, chegamos em um acordo:

Uma tarefa deve possuir as seguintes informações:

- id: identificador único da tarefa, para facilitar a identificação. (Ex.: 1, 2, 3...);
- nome: nome da tarefa. (Ex.: Preparar o almoço);
- descrição: uma breve descrição a respeito do que é a tarefa. (Ex.: O almoço será
frango...);
- prazo: Data limite para que seja feito a tarefa. (Ex.: 21/09/18 12:00:00);
- prioridade: A prioridade que definirá qual tarefa será executada primeiro. (Ex.:
Média);
- concluída: Informar se a tarefa já foi executada;

Você também será responsável por gerar as tabela do banco, contendo essas informações.
Será necessário criar endpoints que serão necessárias para as funcionalidades de Listar,
Visualizar, Editar e Deletar a tarefa;
Deverá ser implementado validações dos respectivos inputs;
Também será preciso informar ao usuário em caso de erro ou sucesso, o resultado das
operações

#  Condições do Projeto

   - Todas as etapas do projeto deverão ser versionadas com o git;
   - O código deverá ser escrito em PHP ou Node, usando arquitetura MVC;
   - API baseada em REST;
   - Tratamento de erros;


#  Instalação

Faça o download ou clone o repositório
https://github.com/daniloaldm/php-treino

E depois:

 ```
composer install
composer global require "laravel/installer=~1.1"

```


Agora você está pronto para executar, mas lembre-se de alterar suas credenciais de banco de dados dentro de .env:

```
DB_DATABASE=phptreino
DB_USERNAME=root
DB_PASSWORD=

```

# Execução

Navegue até a pasta do projeto via terminal, e execute o comando
```
php artisan serve
```
Acesse http://127.0.0.1:8000 no browser

No próprio repositório tem um documento .SQL, que é o script pro banco de dados, basta importar ele no seu banco de dados,e utilizá-lo para a aplicação.

# Autor

**Danilo Alexandrino de Miranda** - [GitHub](https://github.com/daniloaldm) - Email: [danilo.alexandrinodm@gmail.com](danilo.alexandrinodm@gmail.com)


# php-treino
