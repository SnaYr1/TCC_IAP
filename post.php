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
		<!-- Navbar em telas pequenas(celular) -->
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
	
		<div class="w3-padding-large ">
			
			
			<ul class="" id="pgPost">
				
	<?php
	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	}
	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' AND id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
	?>        
					<li class=" w3-col l8 s12">            	
								<span class="thumb w3-center">
									<img class="w3-image" src="upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="800" height="600">
								</span>                
								<span class="content">
									<h1><?php echo $exibe->titulo;?></h1>
										<p><?php echo ($exibe->descricao)?></p> 
										<div class="footer_post">
											<a href="javascript:history.back()">Voltar para página anterior</a>
												<span class="datapost">Data de Publicação: <strong><?php echo $exibe->data;?></strong></span>                        
										</div><!-- footer post -->                    
								</span>                
						</li>  
	<?php
	}//while
	}else{
		echo '<li>Não existe post cadastrados no sistema</li>';
	}
				
	}catch(PDOException $erro){ echo $erro;}
	?>            
				
				<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-like" data-href="https://iapneuro.com.br/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	<div class="fb-comments" data-href="https://www.iapneuro.com.br/post.php?id=<?php echo $idUrl;?>" data-width="100%" data-numposts="5"></div>       
				
				
					
									
				</ul>
				


				
		
		</div><!-- div center -->



		

		</div>
				
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
