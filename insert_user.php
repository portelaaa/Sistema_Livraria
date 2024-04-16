<?php

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$email = $_POST['email'];
$senha = $_POST['senha'];
 
include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL, '$nome', '$setor', '$email', '$senha')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";

?>