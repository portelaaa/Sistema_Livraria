<?php

$nm_editora = $_POST['nm_editora'];
$nm_endereco_editora = $_POST['nm_endereco_editora'];
$nr_endereco_editora = $_POST['nr_endereco_editora'];
$nr_cnpj_editora = $_POST['nr_cnpj_editora'];
$nr_telefone_editora = $_POST['nr_telefone_editora'];
$nm_gerente = $_POST['nm_gerente'];

include 'conexao.php';

$insert = "INSERT INTO tb_editora VALUES (NULL, '$nm_editora', '$nm_endereco_editora', '$nr_endereco_editora', '$nr_cnpj_editora', '$nr_telefone_editora', '$nm_gerente')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";
?>
