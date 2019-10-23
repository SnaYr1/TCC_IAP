<?php
	require '../system/config.php';
	require '../system/database.php';
	include "../conexao.php";
?>

<!DOCTYPE html>
<html>
<title>Instituto Aprender</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="shortcut icon" href="../img/iap.ico" />

    <!-- SCRIPTS  NÃO MEXER -->
    
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

  
<script type="text/javascript">
  window.onload = function(){
    CKEDITOR.replace('editor1');
  };

</script>





  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet"/>
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet"/>
  <!-- Custom Styles  -->
  <link rel="stylesheet" href="../css/post.css"/>
  <link rel="stylesheet" href="../css/teste.css"/>
  <link rel="stylesheet" href="../css/modal.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  <link type="text/css" rel="stylesheet" href="../css/stylelcs.css"/>
  <link rel="stylesheet" type="text/css" href="../css/wrapperstyle.css" />
  


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
  <a href="../minhaconta/minhaconta.php" class="w3-bar-item w3-right"><span class="fa fa-home minhaconta"> Minha Conta</span></a>
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
      <img src="../img/logo.png">
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



	<div class="container">
	<h2>
		Adicionar Postagem | <a href="index.php" title="Voltar">Voltar</a>
	</h2>
	<hr>
	<?php
		
		$visitas = $form ['visitas'] = 0;

		if(isset($_POST['publicar'])){
		$form ['titulo'] 	= DBEscape(strip_tags( trim($_POST['titulo'])));
		$form ['autor'] 	= DBEscape(strip_tags( trim($_POST['autor'])));
		$form ['status'] 	= DBEscape(strip_tags( trim($_POST['status'])));
		$form ['categoria'] = DBEscape(strip_tags( trim($_POST['categoria'])));
		$form ['data']		= date('Y-m-d H:i:s');
		$form ['conteudo'] 	= str_replace('\r\n', " ", DBEscape(trim($_POST['conteudo'])));
		$form = DBEscape ($form);

		if (empty($form['titulo']))
			echo "Preencha o campo Título.";
		else if (empty($form['autor']))
			echo "Preencha o campo Autor.";
		else if (empty($form['status']) && $form['status'] != '0')
			echo "Preencha o campo status.";
		else if (empty($form['conteudo']))
			echo "Preencha o campo conteúdo.";
		else if (empty($form['categoria']))
			echo "Preencha o campo categoria.";
		else{

			$dbCheck = DBRead( 'posts', "WHERE titulo = '". $form['titulo'] ."'");
			if ($dbCheck)
				echo "Desculpe mas já existe uma postagem com este título.";
			else {

				if (DBCreate('posts', $form))
					echo "Sua postagem foi enviada com sucesso!";
				else
					echo "Desculpe, ocorreu um erro...";
			}
		}

	

	echo '<hr>';
	}
	?>

	<form action="" method="post">

		<p>
			<label>Titulo</label><br>
			<input type="text" name="titulo" class="lblpost">
		</p>

		<p>
			<label>Autor</label><br>
      <select name="autor" id="form-field-1" class="col-xs-11 col-sm-6 col-md-8">
				<option value="">Selecione o autor</option>
				<?php


						$result = "SELECT * FROM va_usuarios";
						$resultado= mysqli_query($conn, $result);
						while($row = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></option> <?php
						}
          ?>
          </select>
		</p>

		<p>
			<label>Status</label><br>
			
			<select name="status">
				<option value="1" selected>Ativo</option>
				<option value="0">Inativo</option>
			</select>
		</p>

		<p>
			<label>Categoria</label><br>                                       
            <select name="categoria" id="form-field-1" class="col-xs-11 col-sm-6 col-md-8">
				<option value="">Selecione a categoria</option>
				<?php


						$result = "SELECT * FROM va_categorias";
						$resultado= mysqli_query($conn, $result);
						while($row = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></option> <?php
						}
					?>
			</select>
			
           
		</p>
	


		<p>
			<label>Conteúdo</label><br>
			<textarea cols="80" id="editor1" name="conteudo" rows="10" data-sample-short placeholder="Escreva aqui a postagem !"></textarea>

		</p>

		<input type="submit" name="publicar" value="Publicar">
		
	</form>
		</div>
</body>
</html>