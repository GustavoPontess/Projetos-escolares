# Gerenciador de Receitas 📖

## Apresentação 📝

## Este projeto foi desenvolvido para demonstrar de maneira simples a criação de novas receitas em um banco de dados, utilizando PHP e MySQL. Sua estrutura está organizada em diretórios que seguem um modelo intuitivo, facilitando a compreensão do fluxo de dados.

Este trabalho foi originalmente desenvolvido como prova no Ensino Médio Técnico do COTEMIG, com o objetivo de demonstrar conhecimentos em desenvolvimento web utilizando PHP e MySQL.

## 🚀 Tecnologias Utilizadas

- **PHP** → Lógica de backend e comunicação com o banco de dados.
- **MySQL** → Armazenamento e gerenciamento de dados (script SQL incluso).
- **HTML / CSS** (opcional) → Exibição das interfaces (Views).

## 📋 Como Usar

1. **Clone ou baixe** este repositório.
2. **Importe** o banco de dados:
   - No diretório `Banco/` há um arquivo `prova.sql`.
   - Importe-o em seu servidor MySQL (pode ser via phpMyAdmin, MySQL Workbench, etc.).
3. **Configure** o acesso ao banco:
   - Abra `app/config/config.php` e ajuste `SERVIDOR`, `USUARIO` e `SENHA` de acordo com seu ambiente local.
4. Coloque o projeto em seu servidor local (por exemplo, dentro de `C:\wamp64\www\` ou algo semelhante).
5. Acesse o projeto via navegador, apontando para `index.php`.
   - Ex.: [http://localhost/MeuProjeto/](http://localhost/MeuProjeto/) ou conforme a pasta em que você colocou.
6. Utilize as páginas do sistema para **cadastrar**, **listar**, **atualizar** ou **excluir** receitas.

## 📊 Estrutura de Pastas

```
.
├── Banco/
│   └── prova.sql          # Script SQL para criar/tabelas do banco de dados
│
├── app/
│   ├── config/
│   │   └── config.php     # Arquivo de configuração (credenciais do BD)
│   │
│   ├── Controllers/
│   │   └── ReceitaController.php  # Controlador que gerencia operações de receitas
│   │
│   ├── Models/
│   │   └── Receita.php    # Model que representa a entidade "Receita"
│   │
│   └── Views/
│       └── receita_create.php     # Formulário para criar novas receitas
│
└── index.php              # Ponto de entrada principal do projeto
```

###

