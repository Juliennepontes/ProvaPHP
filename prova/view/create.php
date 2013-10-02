<?

	require_once '../model/UsuarioCRUD.class.php';
	
		$UsuarioCRUD = new UsuarioCRUD();
		extract($_GET);

			if(isset($submit)){
			$usuario = new Usuario($nome, $login, $senha, $email, $telefone, $foto);
			var_dump($usuario);
			$UsuarioCRUD->create($usuario);
			header("Location: index.php");
		}
	
?>

<!doctype html>
<html lang="en">

<head>

</head>
<body>
	<form action="" method="GET">
		<fieldset>
         <legend>Editar</legend>
		<p>Nome: </br><input type="text"name="nome"/></p>
		<p>Login: </br><input type="text"name="login"/></p>
		<p>Senha: </br><input type="text"name="senha"/></p>
		<p>Email: </br><input type="text"name="email"/></p>
		<p>Telefone: </br><input type="text"name="telefone"/></p>
		<p>Foto: </br><input type="text" name="foto"/></p>

		</br>
		<input type="submit" name ="submit" value="Cadastrar"></input>
		
	</fieldset>
	</form>
</body>

</html>