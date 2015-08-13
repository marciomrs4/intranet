<?php
session_start();

//Simples validação de usuario e senha
//$login = wellington;
//$senha = 123;
//if(isset($_POST)){
//if ($login == $_POST['usuario'] && $senha == $_POST['senha']){
//    header("Location: gi.php");
//}  else{
//    
    if($_POST){
        
    $usuario = $_POST['usuario'];
    
    $needle = $usuario;
    
    $usuarios = array('marcio','camila','wellington','jessica');
    
    $haystack = $usuarios;
    
            if(in_array($needle, $haystack)){

                //header('Location: gi.php');
                $erro = 'Usuário Encontrado';

            }  else {                
                header('Location: login.php');
        }
    
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>GESTÃO DE IMAGENS INTRANET</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/gi.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='shortcut icon' href='img/ceadisico.ico'>
</head>

<body>
    
    <div class="container">
        <div class="col-sm-10"> 
            <br>
            <form class="col-sm-5 col-sm-offset-4" method="post"> 
                                                
                <h3 class="text-info"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Usuário e Senha:</h3>                
                <div class="form-group">                    
                    <input type="text" class="form-control" id="usuario" placeholder="Usuário" name="usuario" required>
                </div>
  
                <div class="form-group">                    
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                </div>                                  
                
                <button type="submit" class="btn btn-primary">Entrar</button> 
                <span><?php echo $erro; ?></span>
                <br>
                <br>
                <p class="text-warning">Tecnologia da Informação - <?php echo date(Y);?></p>
            </form>
                
        </div>
    </div>
    
</body>       
</html>

