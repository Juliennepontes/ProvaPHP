<?
    
    require_once '../model/UsuarioCRUD.class.php';

    $usuarioCRUD = new UsuarioCRUD();
    $usuarios = $usuarioCRUD->readAll();

    if(isset($_POST['login']) && isset($_POST['senha'])){

        $login = "Julienne";
        $senha = "ju";

        if ($login == $_POST['login'] && $senha == $_POST['senha']){
        
            session_start();

                $_SESSION['logado'] = true;
    
            if ($_SESSION['logado'] == true){
            header('Location:index.php');
            }
        
         } else {
            echo 'Tente novamente';
            }   

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
    <style>
        .gravatar {
            width: 200px;
            height: 140px;
        }
       
       #content {

           border: 1px black;
           padding: 15px;
           border-style: dashed;
           margin-left: 500px;
           margin-right: 500px;
           margin-top: 20px;
           text-align: center; 
           border-radius: 10px;
        
        } 
        #login{
            border: 1px black;
            border-style: dashed;
            border-radius: 10px;
            margin-right: 610px;
            margin-left: 610px;
            text-align: center;
            padding-top: 20px;

        }
    
      
    </style>
</head>
    <div id="content">
        <? foreach ($usuarios as $usuario) { ?>
                <a href="perfil.php?nome=<?= $usuario->getNome() ?>">
                <img class="gravatar" src="<?= getGravatar($usuario->getEmail(),$usuario->getFoto()); ?>" alt="" /></a></br>
                <?= $usuario->getNome() ?>
                </br>
                   
        <? } ?>
    </div>
     <fieldset>
         </br>
         <div id="login">
            <form action="" method="POST">
                Login: <input type="text" name="login"></input><br>
                Senha:<input type="password" name="senha"></input><br>
              <input type="submit" value="Login"></input>
            </form>
        </div>
    </fieldset>
 </html>