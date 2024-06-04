<?php
 
//recebendo dados do formulário
 
$nome = $_POST['login'];
$senha = $_POST['senha'];
 
//incluindo arquivo de conexão
 
include 'conexao.php';
 
//selecionar os dados no banco de dados
 
$select = "SELECT * FROM tb_user WHERE login = '$nome'";
 
$query = mysqli_query($conexao,$select);
 
$result = mysqli_fetch_array($query);
 
//dados do banco armazenado na variável
 
$name_banco = $result ['login'];
$senha_banco = $result ['senha'];
 
//comparação para acessar o sistema
 
if ($nome == $name_banco && $senha == $senha_banco) {
    
    session_start();
    $_SESSION['username'] = $name_banco 
    header('location: C_cliente.html');
}
else {
    echo "<script>alert('Usuário Invalido'); history.back();</script>";
}
 
 
?>