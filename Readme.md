<p align="center">
  Login
  <img alt="Login" src=".github/imagem1.PNG" width="700px" height="350px">
</p>

<p align="center">
    Lista de projetos
  <img alt="Login" src=".github/imagem2.PNG" width="700px" height="350px">
</p>

<p align="center">
    Sessões de um projeto
  <img alt="Login" src=".github/imagem3.PNG" width="700px" height="350px">
</p>
<p align="center">
    Tarefas de uma sessão
  <img alt="Login" src=".github/imagem4.PNG" width="700px" height="350px">
</p>

<p align="center">
    Agendar data de entrega de cada projeto.
  <img alt="Login" src=".github/imagem5.PNG" width="700px" height="350px">
</p>

<p align="center">
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
  <a href="#-como-rodar">Como rodar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-rotas">Rotas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-contribuir">Como contribuir</a>&nbsp;&nbsp;&nbsp;
 </p>

<br>

# Gerenciador de projetos com PHP

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net/) - 7.2
- [Composer](https://getcomposer.org/) - v1.8.4
- [Postgres](https://www.postgresql.org/) - 10.15-alpine
- [CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
- [HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML/HTML5)
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [Docker](https://www.docker.com/) - 19.03.8
- [Apache](https://www.apache.org/) 2.4.35

## 💻 Projeto

Projeto de um gerenciador de projetos com PHP.

Esse é um projeto pratico da [School of Net](https://www.schoolofnet.com/projeto-pratico/php/linguagem-php/gerenciador-de-projetos-com-php/).

## 👩🏿‍💻 Rotas

- **`POST auth/register`**: Rota crair um usuario;
Envio
```
Content-Type: application/x-www-form-urlencoded

email=joao@joao.com
password=123456
name=João Mangueira

```
Retorno
```
{
    "id":4,
    "name":"Jo\u00e3o Mangueira",
    "email":"joao2@joao.com",
    "password":"$2y$10$uYX4EQ.dkdVMRf4uq5zfDe9bO6exazrW2Fvaj73lDvOEqPNKJLtve",
    "created":null,
    "modified":null
}
```

- **`POST auth/token`**: Rota para gerar um token do usuario;
Envio
```
Content-Type: application/x-www-form-urlencoded

email=joao@joao.com
password=123456

```
Retorno
```
{
    "token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MTEyNjA3MjUsImV4cCI6MTYxMTM0NzEyNSwidXNlciI6eyJpZCI6MywibmFtZSI6IkpvXHUwMGUzbyBNYW5ndWVpcmEiLCJlbWFpbCI6ImpvYW9Aam9hby5jb20iLCJjcmVhdGVkIjpudWxsLCJtb2RpZmllZCI6bnVsbH19.uZKTrER6byeQEvFFEjntF834dql8FLoBKedwna2OA-w"
}
```

- **`GET api/projects`**: Rota que bustar todas as rotas;
Envio
```
Authorization = TOKEN GERADO

```
Retorno
```
[
    {
        "id":3,
        "title":"Teste44f",
        "description":"adfadsfasd",
        "user_id":3,
        "due_date":"2021-01-28",
        "done":0,
        "created":null,
        "modified":null
    }
]
```

- **`GET api/sections?id=`**: Rota que bustar todas as sections e um projeto;
Envio
```
Authorization = TOKEN GERADO

```
Retorno
```
[
   {
      "id":4,
      "title":"tesrte 777",
      "description":"afddsfsdf777",
      "project_id":4,
      "created":null,
      "modified":null,
      "user_id":1
   }
]
```

- **`GET api/tasks?id=`**: Rota que bustar todas as tasks e um projeto;
Envio
```
Authorization = TOKEN GERADO

```
Retorno
```
[
   {
      "id":2,
      "title":"fadsfdsf",
      "description":null,
      "done":0,
      "due_date":null,
      "assigned_to":1,
      "section_id":4,
      "created":null,
      "modified":null,
      "user_id":3
   },
]
```

- **`GET api/subtasks?id=`**: Rota que bustar todas as subtasks e uma tasks;
Envio
```
Authorization = TOKEN GERADO

```
Retorno
```
[
   {
      "id":6,
      "title":"fadsfasdf",
      "done":1,
      "task_id":2,
      "user_id":3
   },
]
```

- **`POST api/projects`**: Rota que cria um projeto;
Envio
```
Authorization = TOKEN GERADO

Content-Type: application/x-www-form-urlencoded

title=teste projects
description=descrição projects

```
Retorno
```
{
   "id":5,
   "title":"teste projects",
   "description":"descri\u00e7\u00e3oprojects",
   "user_id":3,
   "due_date":null,
   "done":0,
   "created":null,
   "modified":null
}
```

- **`POST api/sections`**: Rota que cria uma sections;
Envio
```
Authorization = TOKEN GERADO

Content-Type: application/x-www-form-urlencoded

title=teste section
description=descrição section
project_id=1

```
Retorno
```
{
   "id":1,
   "title":"Section 1",
   "description":"dedsfadfaf dsaf sadfasfsdfafasd afasdfasdfsdf",
   "project_id":1,
   "created":null,
   "modified":null,
   "user_id":1
}
```

- **`POST api/tasks`**: Rota que cria uma tasks;
Envio
```
Authorization = TOKEN GERADO

Content-Type: application/x-www-form-urlencoded

title=teste tasks
description=descrição tasks
section_id=6

```

- **`POST api/subtasks`**: Rota que cria uma subtasks;
Envio
```
Authorization = TOKEN GERADO

Content-Type: application/x-www-form-urlencoded

title=teste tasks
task_id=4

```
Retorno
```
{
   "id":8,
   "title":"teste tasks",
   "done":0,
   "task_id":4,
   "user_id":3
}
```

- **`PUT api/subtasks/$id`**: Rota para marcar subtasks como concluída ou não;
Envio
```
Authorization = TOKEN GERADO

Content-Type: application/x-www-form-urlencoded

done=0 (true ou false)
id=4 (task_id)
```
Retorno
```
{
   "id":4,
   "title":"teste tasks",
   "done":0,
   "task_id":4,
   "user_id":3
}
```

## 🚀 Como Rodar

- Clone o projeto.
- composer install.
- Rodar o Postgres com docker: 
```
docker run --name postgres -e POSTGRES_PASSWORD=docker -p 5432:5432 -d postgres
```
- Criar um banco com o nome pp_project_manager.
- composer server.
- acesse http://localhost:8080/
- Entrar na pasta front e executar npm install em outro terminal para rodar o front-end.
- Depois executar npm start.

User o comando para criar ou recriar o banco.
```
php database.php fresh
```


## Licença

O framework Laravel e esse projeto usam a linceça [MIT license](https://opensource.org/licenses/MIT).
