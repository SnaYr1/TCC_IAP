<?php


  include "login_verifica.php";

  include "conexao.php";
  if (!isset($_REQUEST["id"])) 
  {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $data_nascimento = $_POST['data_nascimento'];
    $usuario = $_POST['usuario'];
    $senha = MD5($_POST['senha']);

  	$sql    = "INSERT INTO IF NOT EXISTS usuario 
  				VALUES (null, 
  						:name, 
  						:lastname, 
  						:data_nascimento, 
  						:usuario,
              :senha)";
  	$result = $conexao->prepare($sql);
  	$result->bindValue(":name", $name);
  	$result->bindValue(":lastname", $lastname);
  	$result->bindValue(":data_nascimento", $data_nascimento);
  	$result->bindValue(":usuario", $usuario);
    $result->bindValue(":senha", $senha);
      $result->execute();
    
      $msg = "<div id='alert alert-success'><strong>Successo:</strong> Cadastrado com sucesso ! <br></div>";

      echo "$msg";
      
      header("location: cadastro.php");
  }
  else
  {
    echo "<div id='alert alert-danger'><strong>Erro:</strong> Não foi possível fazer o cadastro !<br></div>";
  }




?>