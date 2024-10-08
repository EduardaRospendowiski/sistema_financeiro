<?php 
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];

$conec->query("insert into tb_user values
(null,'$nome','$email','$cargo','$senha')");


?>