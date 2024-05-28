</html>

<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="fa-solid fa-book"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="C_cliente.html">Cadastrar Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="C_editora.html">Cadastrar Editora</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listar_cliente.php">Relatorio Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listar_editora.php">Relatorio Editoras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listar_user.php">Relatorio Usuarios</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container">
    <h2>Lista de Usuários</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include 'conexao.php';
    $select = "SELECT * FROM tb_user";
    $query = mysqli_query($conexao,$select);
    while ($result = mysqli_fetch_array($query)) {;
    ?>
    <tr>
      <th scope="row"><?php echo $result['id_user']; ?></th>
      <td><?php echo $result['nm_user']; ?></td>
      <td><?php echo $result['nm_setor']; ?></td>
      <td><?php echo $result['login']; ?></td>
      <td> <a href="edite_user.php?cod=<?php echo $result['id_user']?>"><i class="fa-solid fa-user-pen"></i></a>
      <a href=""><i class="fa-solid fa-trash"></i></td></a> 
    </tr>

    <?php } ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>