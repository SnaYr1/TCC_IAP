<?php

$host = "localhost"; // tipo de conexao pst: sempre sera local :*
$usuario = "root"; // nome do usuario do banco de dados
$senha = ""; // senha do seu banco de dados
$bd = "iapneu77_bd_iap"; // nome do banco de dados

//colete as informações 
$mysqli = new mysqli($host, $usuario, $senha, $bd);
//se der algum erro
if($mysqli->connect_errno)
//imprima esta mensagem
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>