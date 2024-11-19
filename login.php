<?php 

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM logar WHERE login='$usuario' and password='$senha'";
    $conexao = new PDO('mysql:host=localhost; dbname=cadastro', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id_logar'];

    if($logado == null){
        //usuário ou senhas invalidas
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: index.php');

        die();
    }
    ?>