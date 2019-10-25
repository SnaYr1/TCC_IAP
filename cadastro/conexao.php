<?php
define('localhost', 'localhost');
define('user', 'root');
define('senha', '');
define('banco_de_dados', 'iapneu77_bd_iap');
$conexao = mysqli_connect(localhost, user, senha, banco_de_dados) or die ('Não foi possível conectar');   
?>