<?php 
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html>
<title>Instituto Aprender</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
    <!-- SCRIPTS  NÃO MEXER -->
    
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
  <!-- Custom Styles  -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/teste.css"/>
  <link rel="stylesheet" href="css/modal.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link type="text/css" rel="stylesheet" href="css/stylelcs.css"/>
  <link rel="stylesheet" type="text/css" href="css/wrapperstyle.css" />

<!-- FIM SCRIPTS-->
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald";}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-cyan w3-hide-small">

<div class="noticias">
   <span >Noticias</span>  
</div>
  <a href="minhaconta/minhaconta.php" class="w3-bar-item w3-right"><span class="fa fa-home minhaconta"> Minha Conta</span></a>
  <a href="../contato.php" class="w3-bar-item w3-right"> <span class="fa fa-mobile spanzinho"> Entre em contato</a></span>
  <a href="../sobre.php" class="w3-bar-item w3-right w3-hide-medium"> <span class="fa fa-home spanzinho"> Sobre a Empresa</a></span>
  <a href="http://www.facebook.com.br" class="w3-bar-item w3-right"> <span class="fa fa-facebook spanzinho"></a></span>
  <a href="http://www.instagram.com" class="w3-bar-item w3-right"> <span class="fa fa-instagram spanzinho"></a></span>
 
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:3200px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-32 w3-azulescuro">
    
  <div class="infocabecalho w3-hide-small w3-hide-medium container">
    <div class="telefone">
      <ul>
        <div class="foneloko">  <span class="fa fa-phone fonezinho"></span></div>
             (19) 3665-2465   
        <li class="wpp"><span class="fa fa-whatsapp"> </span> (19) 9 9144 7240</li>
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
      <img src="icons/logo.png"></img>
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
        <a href="depoimentos.php" class="w3-bar-item  w3-padding-large w3-hide-medium w3-hide-small">Depoimentos</a>
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
  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="demo01" class="w3-sidebar w3-light-grey w3-hide w3-hide-large w3-hide-medium ">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-center"onclick="myFunction('demo01')"><i class="fa fa-close"></i> Close</a> 
    <br>   
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Inicio</a>
    <br> 
    <a href="noticias.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Noticias</a>
    <br> 
    <a href="servicos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Serviços</a>
    <br> 
    <a href="depoimentos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Depoimentos</a>
    <br> 
    <a href="galeria.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Galeria</a>
    <br>
    <a href="contatos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Contatos</a>
    <br> 
    <a href="sobre.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Sobre a empresa</a>
    <br> 
    <a href="minhaconta/minhaconta.php" class="w3-bar-item w3-button w3-padding-large w3-center"><span class="fa fa-home"> Minha Conta</a>
  </div>

    <!-- Navbar on medium screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="demo02" class="w3-sidebar w3-light-grey w3-hide w3-hide-small w3-hide-large ">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-center"onclick="myFunction('demo02')"><i class="fa fa-close"></i> Close</a> 
    <br>   
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Inicio</a>
    <br> 
    <a href="noticias.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Noticias</a>
    <br> 
    <a href="servicos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Serviços</a>
    <br> 
    <a href="depoimentos.php" class="w3-bar-item w3-button w3-padding-large w3-center" onclick="myFunction()">Depoimentos</a>
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
 
    

  

  <!-- Grid -->
  <div class="w3-row w3-padding ">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
     
</div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Noticias</h3>
         

              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
 

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title ">Sobre</h3>
								<p class="sobre">Site desenvolvido para apresentação de um Trabalho de Conclusão de Curso, sem a pretenção de ganhar lucros sobre este.</p>
								<ul class="footer-links">
									<li><a href="https://www.google.com/maps/place/R.+Francisco+Demasi,+264+-+Vila+Maria,+Mococa+-+SP,+13730-430/@-21.470547,-47.0070029,19.69z/data=!4m5!3m4!1s0x94b7b8445b863fdb:0xa38d9f3ec7459d9e!8m2!3d-21.4705183!4d-47.0068157"><i class="fa fa-map-marker"></i>Francisco Demasi, 264</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>(19) 3665-0000 | (19) 9 9999 9999</a></li>
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
									<li><a href="#">Depoimentos</a></li>
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
									<li><a href="#">Help</a></li>
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
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Instituto Aprender
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}






</script>

</body>
</html>
