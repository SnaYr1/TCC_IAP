<!DOCTYPE html>
<html lang="br">
<head>
  <title>Instituto Aprender</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SCRIPTS -->
    
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Custom Styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" >
  <link rel="stylesheet" href="css/teste.css"/>
  <link rel="stylesheet" href="css/modal.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link type="text/css" rel="stylesheet" href="css/stylelcs.css"/>
  <link rel="stylesheet" type="text/css" href="css/wrapperstyle.css" />
  <style>
  header {
    width:100%;
    height: 220px;
    background: #2c47a0;
  }
  </style>
  <div class="top-noticias">

   <div class="noticias">
      <span >Noticias</span>  
  </div>

  <div class=" container end-noticias" >
    <ul>
        <li> <a href="../contato.php"> <span class="fa fa-mobile spanzinho"> Entre em contato</a></span></li>
        <li> <a href="../sobre.php"> <span class="fa fa-home spanzinho"> Sobre a Empresa</a></span></li>
        <li> <a href="http://www.facebook.com.br"> <span class="fa fa-facebook spanzinho"></a></span></li>
        <li> <a href="http://www.instagram.com"> <span class="fa fa-instagram spanzinho"></a></span></li>
        <li><a href="../minhaconta/minhaconta.php"><span class="fa fa-home minhaconta"> Minha Conta</span></a></li>
    </ul>

  </div>
</div>

</head>
<body>

  <header>
    <div class="container">
        <div class="logo col-sm-6">
          <img src="icons/logo.png" style=""></img>
        </div>

        <div class="texto-logo nomeiap">
        Instituto Aprender
        </div>
    </div>



  <div class="infocabecalho container">
    <div class="telefone">
      <ul>
      <div class="foneloko">  <span class="fa fa-phone fonezinho"></span></div>
             (19) 3656-0000   
        <li class="wpp"><span class="fa fa-whatsapp"> </span> (19) 9 9345 9021</li>
      </ul>
    </div>


    <div class="homezinho"><span class="fa fa-home homezinho"></span></div>
   
    <ul>

          
            <a href="https://www.google.com/maps/place/R.+Francisco+Demasi,+264+-+Vila+Maria,+Mococa+-+SP,+13730-430/@-21.470547,-47.0070029,19.69z/data=!4m5!3m4!1s0x94b7b8445b863fdb:0xa38d9f3ec7459d9e!8m2!3d-21.4705183!4d-47.0068157">
            <div class="endereco">
              <li>R. Francisco Demasi, 264</li>
              <li class="bairro" > Vila Maria, Mococa-SP</li>
              </div>
            </a>
          </ul>  

    </div>
  
    
  </header>


    <div class="container">
      <div class="teste">
          <!-- Nav tabs -->
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link " href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="noticias.php">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="servicos.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="depoimentos.php">Depoimentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="galeria.php">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="sobre.php">Sobre a empresa</a>
          </li>

          <form class="form-inline ml-auto">
      <div class="md-form my-0 active-orange-2">
        <input class="form-control" type="text" placeholder="Procurar no site..." aria-label="Search">
        <a href="#"><i class="fa fa-search text-black ml-3" ></i></a>
      </div>
    </form>
        </ul>
        
      </div>
   </div>

<div class="container col-sm-4 pnc">

          
                        
               
                    <form action="cadastro1.php" method="POST" enctype="application/x-www-form-urlencoded" class="needs-validation" novalidate>				
                      <div id="formContent">
                    
                      <div class="margemop">
                        <style>
                                .margemop{ margin: 50px;}
                        </style>
                        <div class="login underline">
                          Cadastro
                        </div>  
                        
          
                        
                </div>
                        <form>
                        <input type="text" id="name" class="" name="name" placeholder="Nome" maxlength="20">
                        <input type="text" id="lastname" class="" name="lastname" placeholder="Sobrenome" maxlength="20">
                        <!--<input type="date" id="date" class="fadeIn second form-control " value="27/01/2019">-->
                    
                        <script type='text/javascript'>
                            function MascaraData(obj) 
                                {
                              switch (obj.value.length) 
                                  {
                             case 2:
                               obj.value = obj.value + "/";
                               break;
                             case 5:
                               obj.value = obj.value + "/";
                               break;
                               
                    
                            }
                        }
                    </script>
                    <script type='text/javascript'>
                        // WRITE THE VALIDATION SCRIPT.
                        function isNumber(evt) {
                            var iKeyCode = (evt.which) ? evt.which : evt.keyCode
                            if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                                return false;
                    
                            return true;
                        }    
                    </script>
                    
                        <input type='text' class="" name='data_nascimento' maxlength='10' size='14' onKeyPress="MascaraData(this); return isNumber(event);" placeholder="Data de Nascimento">
                    
                        <br>
                        <br>
                        <br>
                          <input type="text" id="usuario" class="" name="usuario" placeholder="E-mail" required>
                          <input type="password" id="senha" class="" name="senha" placeholder="Senha"maxlength="25" required>
                          
                          <input type="submit" class="" value="Enviar" name="enviar">
                
                    
                <div id="formFooter" class="baguiembaixo"><br/>
                <h6>Ja tem conta? <a href="minhaconta.php" class="underlineHover">Faça o Login !</a></h6>

                  
                    </div>
                    </form>

 </div>
</div>
</div>

<footer class="pe fa">Instituto Aprender <i class="fa fa-copyright"> Todos os direitos reservados. </i></footer>

</body>
</html>
