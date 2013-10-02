<?
	require_once '../model/UsuarioCRUD.class.php';

?>

<html>

	
	<form action="" method="GET">
		<fieldset>
         <legend>Editar</legend>
		Nome: </br><input type="text"name="nome"/></br>
		Login: </br><input type="text"name="login"/></br>
		Senha: </br><input type="text"name="senha"/></br>
		Email: </br><input type="text"name="email"/></br>
		Telefone: </br><input type="text"name="telefone"/></br>
		Foto: </br><input type="text" name="foto"/></br>
	
	</fieldset>
		</br>
		<input type="submit" name ="submit" value="Cadastrar"></input>
	</form>
</html>