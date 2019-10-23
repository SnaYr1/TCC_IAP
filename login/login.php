<?php
#include pasta.cpp
if(!isset($_SESSION))
    session_start();
//Login de Usários
if(isset($_POST[login])){
//Vinculando conexao do banco de dados dentro do codigo
  include('gdwdedvh/conexao.php');
  //Exibindo um erro, caso haja um
  $erro = array();
  // Captação de dados
    $senha = $_POST[password];
    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    // Validação de dados
    if(!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";
    if(strlen($senha) < 6 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";
    if(count($erro) == 0){

        $sql = "SELECT senha as senha, usuario_id as valor 
        FROM usuario
        WHERE email = '$_SESSION[email]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado.";

        elseif(strcmp($dado[senha], ($senha)) == 0){
            $_SESSION[usuario_logado] = $dado[valor];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";
//se nao ocorrer nenhum erro durante a autenticacoa
        if(count($erro) == 0){
            //faca o redirecionamento de sucesso
            echo "<script>location.href='https://www.google.com.br';</script>";
            exit();
            unset($_SESSION['email']);
        }          
    }
}

?>
<?php #include protecao.js?>
<!DOCTYPE html>
<?php #include pasta.cpp?>
<html lang="pt-br">
<?php #include pasta.cpp?>
<head>
<?php #include pasta.cpp?>
    <title>cZe2AzXu</title>
    <?php #include pasta.cpp?>
    <meta charset="utf-8">
    <?php #include pasta.cpp?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php #include pasta.cpp?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php #include pasta.cpp?>
    <meta name="description" content="">
    <?php #include pasta.cpp?>
    <meta name="author" content="">
    <?php #include pasta.cpp?>

    <link rel="stylesheet" href="../css/w3.css">
    <!-- Bootstrap -->
      <link href="../css/bootstrap.css" rel="stylesheet"/>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>

      <!-- Material Design Bootstrap -->
      <link href="../css/mdb.min.css" rel="stylesheet"/>
      <!-- Outros  -->
      <link href="css/sb-admin-2.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet"/>
      <link rel="stylesheet" href="../css/teste.css"/>
      <link rel="stylesheet" href="../css/modal.css"/>
      <link rel="stylesheet" href="../css/font-awesome.min.css"/>
      <link type="text/css" rel="stylesheet" href="../css/style.css"/>
      <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
      <link type="text/css" rel="stylesheet" href="../css/stylelcs.css"/>
      <link rel="stylesheet" type="text/css" href="../css/wrapperstyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css" media="all">
    <?php #include pasta.cpp?>
    <script src="protecao.js" type="text/javascript"></script>
    <?php #include pasta.cpp?>
</head>
<body value="x<1¨%ensp;" using="protecao.js" <?php #include pasta.cpp?> >
        <script function="antipasta">
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    </script>
    <div class="container w3-center">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Insituto Aprender - Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                        if(isset($erro)) 
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php 
                            }
                            ?>
                        <form method="post" action="" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" value="Remember Me">
                                        <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                </div>
                                <?php #include pasta.cpp?>
                                <input type="submit" name="login" value="ENTRAR">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php #include pasta.cpp?>
</body>
<?php #include pasta.cpp?>
</html>
<?php #include protecao.js?>
