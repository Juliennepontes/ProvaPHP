<?
class Usuario {

	private $nome;
	private $login;
	private $senha;
	private $email;
	private $telefone;
	private $foto;

	public function __construct($nome, $login, $senha, $email, $telefone, $foto){
		$this->nome = $nome;
		$this->login = $login;
		$this->senha = $senha;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->foto = $foto;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getFoto(){
		return $this->foto;
	}
	
}

?>