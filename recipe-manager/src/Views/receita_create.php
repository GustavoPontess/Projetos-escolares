<?php
require_once "../config/config.php";
require_once "../Controllers/ReceitaController.php";
require_once "../Models/Receita.php";

$app = new ReceitaController();
$app->create();
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cad Receitas</title>
</head>
<body style="background-color: #4f6a7d">
<div class="container mb-3 mt-5 justify-content-md-center align-items-center alert alert-primary">
    <form action="receita_create.php" method="post" class="">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputNome">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="exampleInputTitulo">Titulo da Receita</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputTitulo" placeholder="Titulo" required>
        </div>
        <div class="form-group">
            <label for="exampleInputDescricao">Descriçao</label>
            <input type="text" name="descricao" class="form-control" id="exampleInputDescricao" placeholder="Descriçao" required>
        </div>
        <div class="form-group">
            <label for="exampleInputModoPreparo">Modo de preparo</label>
            <input type="text" name="modo" class="form-control" id="exampleInputDescricao" placeholder="Modo de preparo" required>
        </div>
        <button type="reset" name="Limpar" value="Limpar" class="btn btn-light btn-lg btn-block">Limpar</button>
        <button type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-light btn-lg btn-block">Cadastrar</button>
    </form>
</div>
</body>
</html>
