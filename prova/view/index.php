<?
	
	require_once '../model/UsuarioCRUD.class.php';

	$usuarioCRUD = new UsuarioCRUD();
	$usuarios = $usuarioCRUD->readAll();

	session_start();
	if (isset($_GET['sair'])){
		session_destroy();
		header('Location:indexusuario.php');
	}

	function getGravatar($email = null, $default_url){
		$default   = $default_url;
		$email     = $email;
		$size      = 100;
		$grav_url  = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		return $grav_url;	
	}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <style>
      	.gravatar {
    		width: 200px;
    		height: 140px;
    	}
    	.icon-edit-sign{
    		width: 200px;
    		height: 30px;
    	}
    	.icon-remove-sign{
    		width: 200px;
    		height: 30px;
    	}
    	#content {

           padding: 15px;
           margin-left: 500px;
           margin-right: 500px;
           margin-top: 20px;
           text-align: center; 
           border-radius: 10px;
           
        } 
        
        #icon { 
          
           border-radius: 10px;
		   margin-top: -100px;
		   margin-right: 100px;
		   float: right;
        
        }
      

    </style>
</head>

    <div id="content">

    	<h2>Página do Administrador</h2>
    		<? foreach ($usuarios as $usuario) { ?>

        		<fieldset>
        			<a href="perfil.php?nome=<?= $usuario->getNome() ?>">
	            		<img class="gravatar" src="<?= getGravatar($usuario->getEmail(),$usuario->getFoto()); ?>" alt="" /></br>
	           		 </a>	
	       
	            		<?= $usuario->getNome() ?>

	            		
	            	 	<div id="icon">
	            		    <a href='edit.php?nome=<?=$usuario->getNome()?>'><i class="icon-edit-sign"></i></a></br>
	              		
	            			<a href='delete.php?nome=<?=$usuario->getNome()?>'><i class="icon-remove-sign"></i></a></br>
	            		</div>		
	             </fieldset>

	        <? } ?>
     	
    	</br>
		<a href='create.php'>Cadastrar</a>
    	
    	<form action="indexusuario.php?sair=true" method="post">
		</br>
		<input type="submit" value="Sair"></input>
		</form>

    </div>

</html>