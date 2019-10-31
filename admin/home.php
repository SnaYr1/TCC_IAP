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
				
				// cadastro postagem
				if($acao=='cad-postagem'){include("pages/cad-postagem.php");}	
				
				// exibir postagem
				if($acao=='ver-postagens'){include("pages/ver-postagens.php");}
				
				// editar postagem
				if($acao=='editar-postagem'){include("pages/edt-postagem.php");}



				//cadastrar usuarios
				if($acao=='cad-usuarios'){include("pages/cad-usuarios.php");}

				//exibir usuarios
				if($acao=='ver-usuarios'){include("pages/ver-usuarios.php");}

				//editar usuarios
				if($acao=='editar-usuarios'){include("pages/edt-usuarios.php");}

				

				//cadastrar galeria
				if($acao=='cad-galeria'){include("pages/cad-galeria.php");}

				//exibir galeria
				if($acao=='ver-galeria'){include("pages/ver-galeria.php");}

				//editar galeria
				if($acao=='editar-galeria'){include("pages/edt-galeria.php");}

				//atividades
				if($acao=='atividades'){include('pages/atividades.php');}
			
	}
	else{
		include("pages/inicio.php");
	}
}
?>




<?php include("includes/footer.php");?>
</body>
</html>
