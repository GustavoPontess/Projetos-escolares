<?php
require_once '../model/Receita.php';

class ReceitaController{

    public function create()
    {
        $receita = new Receita();

        if(isset($_POST['email']) && isset($_POST['nome']) && isset($_POST['titulo'])
            && isset($_POST['descricao']) && isset($_POST['modo']) )
        {
            $receita->setEmail($_POST['email']);
            $receita->setNome($_POST['nome']);
            $receita->setTitulo($_POST['titulo']);
            $receita->setDescricao($_POST['descricao']);
            $receita->setModo($_POST['modo']);

            $receita->inserir();
        }
    }
}