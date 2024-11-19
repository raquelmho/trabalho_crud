<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastrar produto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="logomarca.jpg" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
      Makes By Cris Martins
    </a>
  </div>
</nav>
<div class="container text-center col-md-8 offset-lg-2">
  <div class="row col-md-8">
    <form action="salvar_produto.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Cadastrar produto</h2>
        </div>
        <div>
        <input placeholder="  Digite o nome do produto" type="text" name="nome" class="w-80 px-50 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite a quantidade recebida" type="number" name="quantidade" class="w-80 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite o valor para venda ($ Reais)"type="number" name="valor" class="w-80 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
            <button type="submit" class='px-4 py-2 bg-zinc-700 text-white rounded font-bold btn btn-danger'>Cadastrar</button>
        </div>
    </form>
</body>
</html>