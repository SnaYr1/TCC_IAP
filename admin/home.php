<?php include("includes/header.php");?>
</head>
<body>
<?php include("includes/topo.php");?>



<?php
		
	if($nivelLogado ==0){
			include("usuario.php");
		}
	else if($nivelLogado ==1){
		if(isset($_GET['acao'])){
			$acao = $_GET['acao'];	

				if($acao=='welcome' || $acao=='home'){include("pages/inicio.php");}	
				
				// cadastro
				if($acao=='cad-postagem'){include("pages/cad-postagem.php");}	
				
				// exibicao
				if($acao=='ver-postagens'){include("pages/ver-postagens.php");}
				
				// edicao
				if($acao=='editar-postagem'){include("pages/edt-postagem.php");}

				//exibir usuarios
				if($acao=='ver-usuarios'){include("pages/ver-usuarios.php");}
			
	}
	else{
		include("pages/inicio.php");
	}
}
?>




<?php include("includes/footer.php");?>
</body>
</html>
