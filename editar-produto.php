

<?php
      include 'config.php';

    if(isset($_GET['id_produto'])){
        $id = $_GET[ 'id_produto'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM produtos WHERE id_produto = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $quantidade = $n['quantidade'];
            $valor = $n['valor'];
           
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_produto"];
        $nome = $_POST["nome"];
        $quantidade = $_POST["quantidade"];
        $valor= $_POST["valor"];
       
        

        $queryUpdate = "UPDATE produtos SET nome = '$nome', quantidade = '$quantidade', valor = '$valor' WHERE id_produto = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: venda.php');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Cadastrar produto</h2>
        </div>
        <div>
        <input placeholder="Digite o nome do produto" type="text" name="nome" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite a quantidade recebida" type="number" name="quantidade" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite o valor para venda (em $ Reais)"type="number" name="valor" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
            <button name="atualizar" type="submit" class="px-4 py-2 bg-zinc-700 text-white rounded font-bold">Cadastrar</button>
        </div>
    </form>
</body>
</html>