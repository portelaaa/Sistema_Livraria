<?php

$ID = $_POST['id'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$email = $_POST['email'];
 
include 'conexao.php';

$update = "UPDATE `tb_user` SET `nm_user` = '$nome', `setor` = '$setor', `login` = '$login' WHERE `id_user` = $codigo"

$query = mysqli_query($conexao, $update);

echo "Atualiazado com sucesso";

?>