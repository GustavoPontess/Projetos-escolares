# 🏆 User Viewer

## 📖 Sobre o Projeto
O **User Viewer** é uma aplicação web desenvolvida em PHP que permite visualizar usuários cadastrados em um banco de dados MySQL. Utiliza **MVC (Model-View-Controller)** para organização do código e **Bootstrap 5** para uma interface moderna e responsiva.

## 🛠 Tecnologias Utilizadas
- **PHP** - Backend para recuperação e exibição dos dados
- **MySQL** - Banco de dados para armazenar os usuários
- **HTML5** - Estrutura das páginas
- **CSS3 & Bootstrap 5** - Estilização e responsividade

## 📂 Estrutura do Projeto
```
user-viewer/
│── index.php                # Página principal do sistema
│── README.md                # Documentação do projeto
│── database.sql             # Script do banco de dados
│── config/                  # Configurações do banco de dados
│   ├── config.php           # Arquivo de configuração
│── controllers/             # Controladores da aplicação
│   ├── UserController.php   # Controlador para exibição de usuários
│── models/                  # Representação dos dados
│   ├── User.php             # Modelo de usuários e conexão com o banco
│── views/                   # Interface do usuário
│   ├── Users.php            # Página de listagem de usuários
```

## 📋 Como Usar
1. Configure o banco de dados MySQL utilizando o arquivo `database.sql`.
2. Atualize as credenciais de conexão no arquivo `config/config.php`.
3. Inicie um servidor local (como XAMPP ou WAMP) e acesse `index.php` pelo navegador.
4. A interface exibirá a lista de usuários cadastrados.

## 📊 Funcionalidades
✅ Exibição de usuários cadastrados no banco de dados.
✅ Estrutura organizada em **MVC** para melhor manutenção.
✅ Interface responsiva com **Bootstrap 5**.
✅ Tabela interativa com efeito hover e linhas alternadas.

---
📌 **Observação:** O projeto pode ser expandido com funcionalidades adicionais, como filtros de busca, paginação e integração com APIs externas para mais informações sobre os usuários.