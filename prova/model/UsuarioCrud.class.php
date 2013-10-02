<?
	require_once "Usuario.class.php";

	class UsuarioCRUD {

		private $pdo;

		function __construct(){
			$this->pdo = new PDO("mysql:dbname=provaphp;host=127.0.0.1;port=3306","root","");
		}

		function create($usuario){
			$this->pdo->query("INSERT INTO `usuario` VALUES('{$usuario->getNome()}','{$usuario->getLogin()}','{$usuario->getSenha()}','{$usuario->getEmail()}','{$usuario->getTelefone()}','{$usuario->getFoto()}')");
		}

        
        function edit($nome, $usuario){
            $this->pdo->query("UPDATE `usuario` SET `nome`='{$usuario['nome']}',`login`='{$usuario['login']}',`senha`='{$usuario['senha']}',`email`='{$usuario['email']}',`telefone`='{$usuario['telefone']}',`foto`={$usuario['foto']} WHERE `nome` = '$nome'");
        }

        function delete($nome){
            $this->pdo->query("DELETE FROM `usuario` WHERE `nome` = '$nome'");
        }
     
       function readByNome($nome)
        {
            $pdoStmt = $this->pdo->query("SELECT * FROM `usuario` WHERE `nome` = '$nome'");
            $usuario = $pdoStmt->fetch();
            return $usuario;
            
        }
       
		function readAll()
		{
            $pdoStmt = $this->pdo->query("SELECT * FROM `usuario`");
            $usuariosArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
            $usuarios = array();
            foreach ($usuariosArray as $usuarioArray) {
                extract($usuarioArray);
                $usuarios[] = new Usuario($nome, $login, $senha, $email, $telefone, $foto);
            }
            return $usuarios;
		}
       
	}

?>