<?
	require_once '../model/UsuarioCRUD.class.php';
	

	if(isset($_POST['delete'])){
	
			extract($_GET);
			$UsuarioCRUD = new UsuarioCRUD();
			$UsuarioCRUD->delete($nome);
			header('Location:index.php');
		}

	if(isset($_POST['cancel'])){
		header("Location: index.php");
	}	
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<p>Tem certeza que deseja excluir o usuário ?</p>
		<input type="submit" name="delete" value="Confirmar">
		<input type="submit" name="cancel" value="Voltar">
	</form>
</body>
</html>

<body>
	