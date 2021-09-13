<?php
session_start();

require_once "crud/inc/config.php";

$con = new PDO(SERVIDOR,USUARIO,SENHA);

if(isset($_POST["login"]))
{
    $sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
    $sql->execute([$_POST['email'], SHA1($_POST['senha']) ]);

    $usuario = $sql->fetchObject();

    if($usuario){
        //usuario encontrado
        $_SESSION['usuario']= $usuario;
        $_SESSION['msg']= "Bem-vindo";
        $_SESSION['cor']="success";
        header("Location: crud");

    }else{
        //usuario nao encontrado
        $_SESSION['msg']= "Usuario nao encontrado";
        $_SESSION['cor']="danger";
        header("Location: login.php");
    }
}
else if(isset($_POST["cadastrar"]))
{
    if($_POST['senha']==$_POST['senha1']){

        $sql = $con->prepare("INSERT INTO usuario (usuario, email, senha, nome,figura) VALUES (?,?,?,?,?)");
        $sql->execute([$_POST['nomeuser'], $_POST['email'], SHA1($_POST['senha']),$_POST['nome'],$_POST['imagem']]);
        if($sql->execute()){
            //usuario Cadastrado
            $_SESSION['msg']= "Cadastrado";
            $_SESSION['cor']="success";
            header("Location: login");
        }else{
            //usuario nao encontrado
            $_SESSION['msg']= "Erro";
            $_SESSION['cor']="danger";
            header("Location: cadastrar");
        }
    }else{
        $_SESSION['msg']= "Digite a mesma senha nos dois campos";
        $_SESSION['cor']="danger";
        header("Location: cadastrar");
    }
}


