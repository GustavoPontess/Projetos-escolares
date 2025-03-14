# 📌 Recipe Manager

## 📖 Sobre o Projeto
O **Recipe Manager** é uma aplicação web desenvolvida em PHP para facilitar o gerenciamento de receitas culinárias. Com uma interface intuitiva, permite cadastrar receitas de forma organizada.

## 🛠 Tecnologias Utilizadas
- **PHP** - Backend da aplicação
- **MySQL** - Banco de dados para armazenar as receitas
- **HTML5** - Estrutura das páginas
- **CSS3** - Estilização da interface

## 📂 Estrutura do Projeto
```
recipe-manager/
│── index.php                 # Arquivo principal da aplicação
│── README.md                 # Documentação do projeto
│── src/                      # Diretório principal do código
│   ├── config/
│   │   ├── config.php        # Configurações do sistema
│   ├── Controllers/
│   │   ├── ReceitaController.php # Controlador das receitas
│   ├── Models/
│   │   ├── Receita.php       # Modelo da receita
│   ├── Views/
│   │   ├── receita_create.php # Página para criar receitas
│── database/
│   ├── database.sql          # Script do banco de dados
│── public/                   # Diretório para arquivos estáticos (CSS, JS, imagens)
```

## 📋 Como Usar
1. Configure o banco de dados MySQL utilizando o arquivo `database/database.sql`.
2. Atualize as credenciais de conexão no arquivo `src/config/config.php`.
3. Inicie um servidor local (como XAMPP, WAMP ou Laravel Sail) e acesse `index.php` pelo navegador.
4. Utilize a interface para cadastrar receitas.

## 📊 Funcionalidades
✅ Cadastro de receitas com e-mail, nome, título e descrição.

---
📌 **Observação:** O projeto pode ser expandido com funcionalidades adicionais, como upload de imagens para receitas, categorização por tipo de prato e integração com APIs externas para sugestões automáticas de receitas.