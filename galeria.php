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
 
   

<div class="w3-container w3-center ">
  <h1>Galeria</h1>
  <hr>
</div>

      <!-- Grid -->
      <div class="w3-row w3-padding">
        <!-- Blog entries -->
        <div class="w3-col l8 s12 container">  
          <!-- Blog entry -->
          <div class="w3-container w3-white  w3-padding-large">
      <div class="divcenter w3-container">
        <ul class="boxposts">
                  
            <?php

            if(empty($_GET['pg'])){}
            else{ 
            $pg =$_GET['pg'];
            if(!is_numeric($pg)){

            echo '<script language= "JavaScript">
                    location.href="index.php";
              </script>';
            }

            }


            if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

            $quantidade = 3;
            $inicio = ($pg*$quantidade) - $quantidade;


            $sql = "SELECT * from tb_galeria WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
            try{
              $resultado = $conexao->prepare($sql);
              $resultado->execute();
              $contar = $resultado->rowCount();
              
              if($contar > 0 ){
                while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
            ?>        
                    <li>      
                      <div class="w3-row-padding">
                        <div class="w3-third w3-container w3-margin-bottom w3-cell">       	
                          <span class="thumb w3-container">
                            <img src="upload/galeria/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="300" height="300">
                          </span> 
                        </div>
                      </div>              
                      </li> 
                      <hr>  
              <?php
              }//while
              }else{
                echo '<li>Não existe imagem cadastradas no sistema</li>';
              }
                    
              }catch(PDOException $erro){ echo $erro;}
              ?>           
            </ul>

            <!-- inicio botoes -->

            <style>
            /* paginacao */

            .paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
            .paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px;text-decoration:none;font-family:tahoma, "Trebuchet Ms", arial;font-size:13px; }
            .paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}

            <?php
            if(isset($_GET['pg'])){
              $num_pg = $_GET['pg'];	
            }else{$num_pg = 1;}
            ?>

            .paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}

            </style>


            <?php
            $sql = "SELECT * from tb_galeria";
            try{
                $result = $conexao->prepare($sql);			
                $result->execute();
                $totalRegistros = $result->rowCount();
              }catch(PDOException $e){
                echo $e;
              }
              
              if($totalRegistros <=$quantidade){}
              else{
                $paginas = ceil($totalRegistros/$quantidade);
                if($pg > $paginas){
                  echo '<script language= "JavaScript">
                    location.href="index.php";
                    </script>';}
                $links = 5;	
                
                if(isset($i)){}
                else{$i = '1';}

            ?>

            <div class="paginas">

            <a href="index.php?pg=1">Primeira Página</a>
              
              <?php
              if(isset($_GET['pg'])){
                $num_pg = $_GET['pg'];	
              }
              
              for($i = $pg-$links; $i <= $pg-1; $i++){
                if($i<=0){}
                else{ 
            ?>
              
              <a href="index.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
              
                  
            <?php  }} ?>
              
              
              <a href="index.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
              

            <?php
            for($i = $pg+1; $i <= $pg+$links; $i++){
              if($i>$paginas){}
              else{
            ?>
                
            <a href="index.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
              
            <?php
              }
            }
            ?>

            <a href="index.php?pg=<?php echo $paginas;?>">Última página</a>		

            </div><!-- paginas -->
            <?php
              }
            ?>
            <!-- fim botoes paginacao -->   

            </div>
            </div>
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



</body>
</html>
