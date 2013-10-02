<?
	require_once '../model/UsuarioCRUD.class.php';

	function getGravatar($email = null, $default_url){
		$default   = $default_url;
		$email     = $email;
		$size      = 100;
		$grav_url  = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		return $grav_url;	
	}

	$UsuarioCRUD = new UsuarioCRUD();
	$name = $_GET['nome'];
	$usuario = $UsuarioCRUD->readByNome($name);

?>

<html>

	<head>
		<style>
		img {
			width: 300px;
    		height: 240px;
			
			}

	

        #content{
        	border: 3px black;
        	border-style: dashed;
        	border-radius: 10px;
        	margin-right: 400px;
			margin-left: 400px;  
			text-align: center;
			padding-bottom: 30px; 

        }
       
        h1{
			 text-align: center;       
	  }
       
	</style>
	</head>
	<body>
	<div id="content">
		<h1>Perfil de Usuario</h1>
		

			<img src="<?= getGravatar($usuario['email'],$usuario['foto'])?>"</img></br>
			
			 Nome: <?=$usuario['nome'];?></br>
			 Login: <?= $usuario['login'];?></br>
		 	 Senha: <?= $usuario['senha'];?></br>
		 	 Email: <?= $usuario['email'];?></br>
		 	 Telefone: <?= $usuario['telefone'];?></br>
		 	 URL: <?= $usuario['foto'];?></br>
		
	</div>
	</body>
</html>