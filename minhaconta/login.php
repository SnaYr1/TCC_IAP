<?php
	include "conexao.php";

	$usuario = $_REQUEST["usuario"];
	$senha = md5($_REQUEST["senha"]);

	$sql    = "SELECT * from usuario
				where usuario = :usuario 
				 and senha  = :senha";

	$result = $conexao->prepare($sql);
	$result->bindValue(":usuario", $usuario);
	$result->bindValue(":senha", $senha);
	$result->execute();

	if ($result->rowCount() == 1)
	{
		$linha = $result->fetch(PDO::FETCH_ASSOC);

		if ($linha["resetasenha"]=="sim")
		{
			header("location: usuarios_alterasenha.php?id=".$linha["userid"]);
		}
		else
		{
			session_start();
			$_SESSION["userid"] = $linha["userid"];
			$_SESSION["name"] = $linha["name"];
			$_SESSION["lastname"] = $linha["nome"];
			$_SESSION["data_nascimento"] = $linha["data_nascimento"];
			$_SESSION["email"] = $linha["email"];
			$_SESSION["usuario"] = $linha["usuario"];

			header("location: minhaconta.php");
		}
		
	}
	else
	{
		header("location: login_invalido.php");
	}
?>