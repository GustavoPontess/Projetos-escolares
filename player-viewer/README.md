# 🏆 Player Viewer

## 📖 Sobre o Projeto
O **Player Viewer** é uma aplicação web desenvolvida em PHP que permite visualizar os jogadores cadastrados diretamente no banco de dados. O sistema segue uma arquitetura baseada em **MVC (Model-View-Controller)** para organizar melhor a separação entre dados e apresentação.

## 🛠 Tecnologias Utilizadas
- **PHP** - Backend para recuperar e exibir dados do banco
- **MySQL** - Banco de dados para armazenar os jogadores
- **HTML5** - Estrutura das páginas
- **CSS3** - Estilização da interface

## 📂 Estrutura do Projeto
```
player-viewer/
│── database.sql             # Script do banco de dados
│── index.php                # Página principal do sistema
│── config/                  # Arquivos de configuração
│   ├── config.php           # Configuração do sistema
│── controllers/             # Controladores da aplicação
│   ├── UserController.php   # Controlador para exibição de jogadores
│── models/                  # Representação de dados
│   ├── User.php             # Modelo dos jogadores
│── views/                   # Interface do usuário
│   ├── Users.php            # Página de exibição dos jogadores
```

## 📋 Como Usar
1. Configure o banco de dados MySQL utilizando o arquivo `database.sql`.
2. Atualize as credenciais de conexão no arquivo `config/config.php`.
3. Inicie um servidor local (como XAMPP ou WAMP) e acesse `index.php` pelo navegador.
4. A interface exibirá a lista de jogadores cadastrados.

## 📊 Funcionalidades
✅ Visualização de jogadores cadastrados no banco de dados.
✅ Estrutura organizada em **MVC** para melhor manutenção.
✅ Interface simples para exibição de informações.

---
📌 **Observação:** O projeto pode ser expandido com funcionalidades adicionais, como busca de jogadores, ordenação por estatísticas e integração com APIs externas para dados complementares.