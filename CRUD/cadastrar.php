<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="crud/css/bootstrap.min.css">
    <link rel="stylesheet" href="crud/css/css.css">
    <link rel="icon" href="crud/img/Babyyy.png" type="imagen">
    <title>Baby´s Sister</title>
</head>
<body>
<header>
    <nav>
        <div>
            <a href="index.php" style="text-decoration: none"><h1>Baby´s Sister</h1></a>
        </div>
        <button>&#9776;</button>
        <ul>
            <li>
                <p>Sobre</p>
            </li>
            <li>
                <p>Equipe</p>
            </li>
            <li>
                <a href="login.php" style="text-decoration: none"><p>Entrar</p></a>
            </li>
        </ul>
    </nav>
</header>
<div class="wrapper">
    <div class="container-fluid mb-3 mt-5">
        <div class="row justify-content-md-center align-items-center">
            <div class="alert alert-primary tamanho">
                <form action="autenticacao.php" method="post">
                    <?php
                    if(isset($_SESSION['msg'])){
                        echo"<div class='alert alert-".$_SESSION['cor']."'>".$_SESSION['msg']."</div>";
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <div class="form-group">
                        <div style="text-align: center;">
                            <label for="imagem"><img src="crud/img/upimg.png" aria-placeholder="IMG" style="height: 100px; width: 100px; background-color: #ffffff; border: solid 1px #1b1e21; border-radius: 50px" alt="img"></label>
                            <input type="file" name="imagem" id="imagem" placeholder="img" onchange="previewImagem()" style="display: none">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputNome" aria-describedby="Nome" placeholder="Nome Completo" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNomeuser">Nome de usuario</label>
                        <input type="text" name="nomeuser" class="form-control" id="exampleInputNomeuser" aria-describedby="Nomeuser" placeholder="Nome de Usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="Email" placeholder="Seu email" required>
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Confirmar Senha</label>
                        <input type="password" name="senha1" class="form-control" id="exampleInputPassword" placeholder="Confirme Senha" required>
                    </div>
                    <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-light btn-lg btn-block">Cadastrar</button>
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                    function previewImagem(){
                        const imagem = document.querySelector('input[name=imagem]').files[0];
                        const preview = document.querySelector('img');
                        const reader = new FileReader();
                        reader.onloadend = function (){
                            preview.src = reader.result;
                        }
                        if(imagem){
                            reader.readAsDataURL(imagem);
                        }else {
                            preview.src = "crud/img/upimg.png";
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <ul class="bg-bubbles">
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
        <li><img src="crud/img/Nuvem.png" alt="nuvem"></li>
    </ul>
</div>
</body>
</html>

