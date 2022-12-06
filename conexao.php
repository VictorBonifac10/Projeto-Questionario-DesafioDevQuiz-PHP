<?php
$servidor = "localhost";
$user = "root";
$Senha = "";
$banco = "gerador_prova";

$conexao = mysqli_connect($servidor, $user, $Senha);
mysqli_select_db($conexao, $banco);

//if($conexao->connect_errno){
//    echo"erro";
//}else{
//    echo"deu certo";
//}

?>