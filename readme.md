<p align="center">
  <img alt="animation" src=".github/imagem1.PNG" width="100%">
</p>

<p align="center">
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
  <a href="#-como-rodar">Como rodar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
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
- [Vue](https://vuejs.org/) 2.5.2
- [Vuetify](https://vuetifyjs.com/en/) 1.1.6

## 💻 Projeto

Projeto de um gerenciador de projetos com PHP.

Esse é um projeto pratico da [School of Net](https://www.schoolofnet.com/projeto-pratico/php/linguagem-php/gerenciador-de-projetos-com-php/).


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
- Entrar na pasta front e executar npm start.

User o comando para criar ou recriar o banco.
```
php database.php fresh
```


## Licença

O framework Laravel e esse projeto usam a linceça [MIT license](https://opensource.org/licenses/MIT).
