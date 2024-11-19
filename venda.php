<?php
include 'config.php';
include 'read.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <div class="container text-center col-md-8 offset-lg-3">

      <div class="row">
          <table class="table table-striped table-hover table-secondary border border-2 border-danger rounded-5">
              <thead>
                  <th scope="col">ID</th>
                  <th scope="col">Nome Produto</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Preço Varejo</th>
                  <th scope="col">Ações</th>
              </thead>
              <?php
                  while($produto = mysqli_fetch_assoc($listarSQL)){?>
                  <tbody id="dados">
                      <tr>
                          <td><?php echo $produto['id_produto'] ?></td>
                          <td><?php echo $produto['nome'] ?></td>
                          <td><?php echo $produto['quantidade'] ?></td>
                          <td><?php echo $produto['valor'] ?> R$</td>
                          <td>
                              <a href="delete.php?id_produto=<?php echo $produto['id_produto']; ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Excluir</a>                                  
                              <a href="editar-produto.php?id_produto=<?php echo $produto['id_produto']; ?>" class="btn btn-sm btn-info"><i class="bi bi-arrow-repeat"></i> Atualizar</a>
                            </td>
                      </tr>
                  </tbody>
                  <?php } ?>
          </table>
      </div>
    </div>
    <br>


</body>
</html>