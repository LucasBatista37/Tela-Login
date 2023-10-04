<?php 
//informações para conexão
$servidor = "localhost";
$login = "root";
$password = "root";
$banco = "bdsistema";

$conexao = mysqli_connect($servidor, $login, $password, $banco);

//inserindo dados manualmente 

$sql = "Insert Into `tb_usuario` (`id_usuario`, `nm_usuario`, `login`, `senha`, `setor`) Values (Null, 'roberta', 'roberta.barbosa', '123456', 'RH')";

$insert = mysqli_query($conexao, $sql);

?>