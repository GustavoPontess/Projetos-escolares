<?php
class Usuario{
    
    private $numero_camisa;
    private $nome;
	private $clube;
	private $posicao;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);        
    }
    
    public function all(){
        // O MÉTOD PREPARE DA CLASS PDO ACEITA INSTRUÇÕES SQL
        $sql = $this->con->prepare("SELECT * FROM informacoes ORDER BY nome");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getNumero_camisa()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setNumero_camisa($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  mixed
	 */
	public function getClube()
	{
		return $this->cpf;
	}

	/**
	 * Set the value of email
	 *
	 * @param   mixed  $email  
	 *
	 * @return  self
	 */
	public function setClube($cpf)
	{
		$this->email = $cpf;

		return $this;
	}

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	

}