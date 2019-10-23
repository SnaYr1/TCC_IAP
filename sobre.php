<?php 
date_default_timezone_set('America/Sao_Paulo');
require_once 'system/config.php';
require_once 'system/database.php';
include 'conexao.php';
require_once ("admin/conexao/conecta.php");
require ("admin/functions/limita-texto.php");
?>


<!DOCTYPE html>
<html>
<title>Instituto Aprender</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="shortcut icon" href="img/iap.ico" />
<link href="css/post.css" rel="stylesheet"/>



    <!-- SCRIPTS  NÃO MEXER -->
    
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap-->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>





    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>

  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet"/>
  <!-- Outros  -->

  <link href="css/style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/teste.css"/>
  <link rel="stylesheet" href="css/modal.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link type="text/css" rel="stylesheet" href="css/stylelcs.css"/>
  <link rel="stylesheet" type="text/css" href="css/wrapperstyle.css" />
<link rel="stylesheet" type="text/css" href="css/estilo2.css" media="all">
  


<!-- FIM SCRIPTS-->
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald";}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar com icones sociais -->
<div class="w3-bar w3-cyan w3-hide-small">

<div class="noticias">
   <span >Noticias</span>  
</div>
  <a href="index.php" class="w3-bar-item w3-right"><span class="fa fa-home minhaconta"> Minha Conta</span></a>
  <a href="contato.php" class="w3-bar-item w3-right"> <span class="fa fa-mobile spanzinho"> Entre em contato</a></span>
  <a href="sobre.php" class="w3-bar-item w3-right w3-hide-medium"> <span class="fa fa-home spanzinho"> Sobre a Empresa</a></span>
  <a href="https://www.facebook.com/IAPMococa/" class="w3-bar-item w3-right"> <span class="fa fa-facebook spanzinho"></a></span>
  <a href="http://www.instagram.com" class="w3-bar-item w3-right"> <span class="fa fa-instagram spanzinho"></a></span>
 
</div>
  
<div class="w3-content" style="max-width:3200px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-32 w3-azulescuro">
    
  <div class="infocabecalho w3-hide-small w3-hide-medium container">
    <div class="telefone">
      <ul>
        <div class="foneloko">  <span class="fa fa-phone fonezinho"></span></div>
             (19) 3665-2465   
        <li class="wpp"><span class="fa fa-whatsapp"> </span>(19) 9 9144 7240</li>
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
    <div class="logo container">
      <img src="img/logo.png">
    </div>
    <h1 class="w3-left texto-logo"><b>Instituto Aprender</b></h1>

  </header>

<!-- Navbar -->
  <div class="teste">
    <div class="w3-bar w3-white container">
    <a class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-large w3-right " href="javascript:void(0)" onclick="myFunction('demo01')" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item  w3-padding-large w3-hide-small w3-hide-large w3-right " href="javascript:void(0)" onclick="myFunction('demo02')" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Inicio</a>
        <a href="noticias.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Noticias</a>
        <a href="servicos.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Serviços</a>
        <a href="galeria.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Galeria</a>
        <a href="contato.php" class="w3-bar-item w3-padding-large w3-hide-medium w3-hide-small">Contato</a>
        <a href="sobre.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Sobre</a>
        
          <div class="  w3-hide-small w3-hide-medium w3-right btnsearch">
            <a href="#"><i class="fa fa-search"></i></a>
          </div>
          <div class=" md-form my-0 active-orange-2 w3-right w3-hide-small w3-hide-medium">
              <input class="form-control" type="text" placeholder="Procurar no site..." aria-label="Search">
          </div>
        
    </div>
</div>
<div class="w3-top">
  <!-- Navbar em telas pequenas(mobile) -->
  <div id="demo01" class="w3-sidebar w3-light-grey w3-hide w3-hide-large w3-hide-medium ">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-center"onclick="myFunction('demo01')"><i class="fa fa-close"></i> Close</a> 
    <br>   
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Inicio</a>
    <br> 
    <a href="noticias.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Noticias</a>
    <br> 
    <a href="servicos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Serviços</a>
    <br> 
    <a href="galeria.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Galeria</a>
    <br>
    <a href="contatos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Contatos</a>
    <br> 
    <a href="sobre.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Sobre a empresa</a>
    <br> 
    <a href="minhaconta/minhaconta.php" class="w3-bar-item w3-button w3-padding-large w3-center"><span class="fa fa-home"> Minha Conta</a>
  </div>

    <!-- Navbar em telas medias(tablets)-->
    <div id="demo02" class="w3-sidebar w3-light-grey w3-hide w3-hide-small w3-hide-large ">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-center"onclick="myFunction('demo02')"><i class="fa fa-close"></i> Close</a> 
    <br>   
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Inicio</a>
    <br> 
    <a href="noticias.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Noticias</a>
    <br> 
    <a href="servicos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Serviços</a>
    <br> 
    <a href="galeria.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Galeria</a>
    <br>
    <a href="contatos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Contatos</a>
    <br> 
    <a href="sobre.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Sobre a empresa</a>
    <br> 
    <a href="minhaconta/minhaconta.php" class="w3-bar-item w3-button w3-padding-large w3-center"><span class="fa fa-home"> Minha Conta</a>
  </div>
</div>





 
<div class="w3-center w3-cyan w3-padding">
  <h1>Sobre a empresa</h1>

</div>
<img src="equipe/iap.jpg" class="objectImage2"/>
        <div class="col-md-10 col-xs-10 w3-center container w3-padding">

            <h5>O Instituto Aprender fundado em 2010, oferece oficinas, mini-cursos e cursos para professores e
                 encontros temáticos de orientação para pais. Além do ponto forte de 
                 atendimento à dificuldades de aprendizagens escolares e transtornos globais 
                 do desenvolvimento, para pessoas de todas as faixas etárias portadoras de 
                 transtornos cognitivos e outras doenças neuropsicomotoras e sensoriais. 
                 A empresa foi fundado em 2010, oferencendo Oficinas, Palestras, Mini-cursos 
                 e Cursos (Extensão e Pós-Graduação), para que a pessoa melhores mais ainda
                suas habilidades e elimene suas dificuldades em raciocinar.
                O instituto oferece também profissionais no ramo da neurociencia, psicologas,
                psciciatras, e neuropsicopadagogas.</h5>
                
        </div>
        <br>
        <br>

        <div class="w3-center w3-orange w3-padding">
            <h1>Nossa equipe</h1>
        </div>
        <div class="container" style="list-style:none;">

          <div class="section">
            <div class="row">
                  
                  <div class="col-md-4 col-xs-4 w3-center">
                    <img class="w3-circle objectImage" src="equipe/maria.jpg"/>
                      <li><h5>Maria Laura - SECRETÁRIA</h5></li>
                  </div>
                  <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/jessica.jpg"/>
                        <li><h5>Jéssica - NEUROPSICOPEDAGOGA</h5></li>
                      </div>
                      <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/adriana.jpg"/>
                        <li><h5>Adriana - NEUROPSICOPADAGOGA E COORDENADORA PEDAGÓDIGOCA</h5></li>
                      </div>
                      <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/valeria.jpg"/>
                        <li><h5>Valéria - PARCEIRA NEUROPSICOPEDAGOGA</h5></li>
                      </div>
                      <br>
     
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/franciele.jpg"/>
                        <li><h5>Franciele - PSICOLOGA</h5></li>
                      </div>
                      <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/alessandro.jpg"/>
                        <li><h5>Alessandro - FACILITADOR DE BARRAS DE ACCESS REIKI</h5></li>
                      </div>
                      <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/mario.jpg"/>
                        <li><h5>Mário Eduardo - ADMINISTRADOR</h5></li>
                      </div>
                      <br>
                      <div class="col-md-4 col-xs-4 w3-center">
                      <img class="w3-circle objectImage" src="equipe/antonio.jpg"/>
                        <li><h5>Antônio Carlos - CONTATO COMERCIAL DE CRUZEIRO DO SUL VIRTUAL EAD</h5></li>
                      </div>
                      
                  
              </div>
          </div>

      </div> 
  </div>

  <div class="w3-container w3-center w3-green w3-padding">

            <h1>Como Chegar</h1>

        </div>
        <br>

          <div class="mapouter w3-padding container w3-center"><div class="gmap_canvas"><iframe width="850" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=R.%20Francisco%20Demasi%2C%20264%20-%20Vila%20Maria%2C%20Mococa%20-%20SP%2C%2013730-430&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:600px;width:850px;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:850px;}</style></div>
  <hr>


 
      
    <!-- END BLOG ENTRIES -->
    </div>

    <style>
      footer {
        font-family: "Oswald";
      }
      </style>
<!-- Footer -->
<footer id="footer" >
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container" >
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
                <h3 class="footer-title ">Sobre</h3>
								<p class="sobre">Site desenvolvido para apresentação de um Trabalho de Conclusão de Curso, sem a pretenção de ganhar lucros sobre este.</p>
								<ul class="footer-links">
									<li><a href="https://www.google.com/maps/place/R.+Francisco+Demasi,+264+-+Vila+Maria,+Mococa+-+SP,+13730-430/@-21.470547,-47.0070029,19.69z/data=!4m5!3m4!1s0x94b7b8445b863fdb:0xa38d9f3ec7459d9e!8m2!3d-21.4705183!4d-47.0068157"><i class="fa fa-map-marker"></i>Francisco Demasi, 264</a></li>
									<li class="w3-text-black"><i class="fa fa-phone"></i>(19) 3665-2465 | (19) 9 99144 7240 </li>
									<li><a href="contato.php"><i class="fa fa-envelope-o"></i>suporte@iap.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="#">Noticias</a></li>
									<li><a href="#">Serviços</a></li>
									<li><a href="#">Galeria</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informações</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre a empresa</a></li>
									<li><a href="#">Contato</a></li>
									<li><a href="#">Política de Privacidade</a></li>
									<li><a href="#">Termos & Condições</a></li>
								</ul>
							</div>
            </div>
            

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Serviços</h3>
								<ul class="footer-links">
									<li><a href="#">Minha Conta</a></li>
									<li><a href="#">Ajuda</a></li>
									<li><a href="#">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">

							<span class="copyright">
								Copyright <?php $today = date("Y");  echo "$today"; ?> Todos os direitos reservados | Instituto Aprender
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->



</body>
</html>
