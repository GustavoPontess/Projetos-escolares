<?php
Class Receita{

    private $email;
    private $nome;
    private $titulo;
    private $descricao;
    private $modo;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function inserir()
    {
        $sql = $this->con->prepare("INSERT INTO receita (email,nome,titulo,descricao,modo)VALUES (?,?,?,?,?)");
        $sql->execute([
            $this->getEmail(),
            $this->getNome(),
            $this->getTitulo(),
            $this->getDescricao(),
            $this->getModo(),
        ]);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getModo(){
        return $this->modo;
    }

    public function setModo($modo){
        $this->modo = $modo;
    }
}