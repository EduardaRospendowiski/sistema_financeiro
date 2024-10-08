<?php 
//recebendo os dados da tela de login

$email = $_POST['email'];
$password = $_POST['senha'];

//link conexao
include 'conexao.php';

//pegar os dados do banco 

$sql = "SELECT * FROM tb_user WHERE email = '$email'";

$query = $conec->query($sql);
$resultado = $query->fetch_assoc();


$email_banco = $resultado ['email'];
$senha_banco = $resultado ['semha'];

if($email == $email_banco && $passwoed == $senha_banco) {
header ('location:tela_inicial.html');
}else {
    echo "<script> alert('usuario ou senha invalida'); history.back(); </script>";
}

print_r($resultado);

?>