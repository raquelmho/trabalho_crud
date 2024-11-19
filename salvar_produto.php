<?php
    

    include 'config.php';
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
   
    $sql = mysqli_query($connectionBD, "INSERT INTO produtos(nome, quantidade, valor) VALUES ('$nome', '$quantidade','$valor')");
    
    if ($sql){
        header('Location: venda.php');
    
    }
    

?>