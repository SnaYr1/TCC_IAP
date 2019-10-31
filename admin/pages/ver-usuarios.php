
<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
<div class="span12">     
<?php



	//excluir
	if(isset($_GET['delete'])){
		$id_delete = $_GET['delete'];
		
		
		if($nivelLogado ==1){
		
		// seleciona a imagem
		$seleciona = "SELECT * from login WHERE id= :id_delete";
		try{
			$result = $conexao->prepare($seleciona);	
			$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);		
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				$loop = $result->fetchAll();
				foreach ($loop as $exibir){
				}
				
				$fotoDeleta = $exibir['imagem'];
				$arquivo = "../upload/usuarios/" .$fotoDeleta;
				unlink($arquivo);
				
				
				// exclui o registo
				$seleciona = "DELETE from login WHERE id=:id_delete";
				try{
					$result = $conexao->prepare($seleciona);
					$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);				
					$result->execute();
					$contar = $result->rowCount();
					if($contar>0){
						echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Sucesso!</strong> O usuario foi excluído.
                </div>';
					}else{
						echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro!</strong> Não foi possível excluir o usuario.
                </div>';	
					}
					
					
					}catch (PDOWException $erro){ echo $erro;}
			}
			
		}catch (PDOWException $erro){ echo $erro;}
	}else{
		echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro!</strong> Seu nível de usuário não permite a exclusão de registro.
                </div>';	
	}
			
	}

?> 

</div>    
     
     
     
            <div class="span12">	      		
	      		<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Visualizar Usuários</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Nº</th>
                    <th> Nome </th>
                    <th> Email</th>
                    <th> Data de Nascimento</th>
                    <th> Usuário</th>
                    <th> Data do Cadastro</th>
                    <th> Nível</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
<?PHP
include("functions/limita-texto.php");

if(empty($_GET['pg'])){}
else{ 
$pg =$_GET['pg'];
if(!is_numeric($pg)){
	
	echo '<script language= "JavaScript">
					location.href="home.php?acao=ver-usuarios";
		</script>';
}

}


if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

if(isset($_POST['palavra-busca'])){
	$quantidade = 10000;
}else{
	$quantidade = 10;
}


$inicio = ($pg*$quantidade) - $quantidade;

if(isset($_POST['palavra-busca'])){
	$busca = addslashes($_POST['palavra-busca']);
	$select = "SELECT * from login WHERE titulo LIKE '%$busca%' ORDER BY id DESC LIMIT $inicio, $quantidade";	
}else{
	$select = "SELECT * from login ORDER BY id DESC LIMIT $inicio, $quantidade";
}


$contagem =$inicio + 1;
		
		try{
			$result = $conexao->prepare($select);			
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
?>           
                  <tr>
                  	<td><?php echo $contagem++;?></td>
                    <td> <?php echo $mostra->nome;?> </td>
                    <td> <?php echo $mostra->email;?> </td>
                    <td> <?php echo $mostra->dataNasc;?> </td>
                    <td> <?php echo $mostra->usuario;?> </td>
                    <td> <?php echo $mostra->dataCadastro;?> </td>
					<td><?php echo $mostra->nivel;?></td>
					<td class="td-actions"><a href="home.php?acao=atividades&id=<?php echo $mostra->id;?>" class="btn btn-small btn-info"><i class="btn-icon-only icon-gamepad"> </i></a>
                    <a href="home.php?acao=edt-usuarios&id=<?php echo $mostra->id;?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
                    
                    <a href="home.php?acao=ver-usuarios&pg=<?php echo $pg;?>&delete=<?php echo $mostra->id;?>" class="btn btn-danger btn-small"  onClick="return confirm('Deseja realmente exluir o usuário?')"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
<?php
}				
			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Aviso!</strong> Não há usuários cadastrado em nosso banco de dados ou a página não existe.
                </div>';
			}
			
		}catch(PDOException $e){
			echo $e;
		}
?>                  
                  
                
                </tbody>
              </table>  
            </div> 
            <!-- /widget-content --> 

<!-- inicio botoes -->

<style>
/* paginacao */

.paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
.paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px; }
.paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}

<?php
	if(isset($_GET['pg'])){
		$num_pg = $_GET['pg'];	
	}else{$num_pg = 1;}
?>

.paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}

</style>


<?php
if(isset($_POST['palavra-busca'])){
	$busca = addslashes($_POST['palavra-busca']);
	$sql = "SELECT * from login WHERE titulo LIKE '%$busca%'";	
}else{
	$sql = "SELECT * from login";
}
	
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
					location.href="home.php?acao=ver-usuarios";
					</script>';}
			$links = 5;	
			
			if(isset($i)){}
			else{$i = '1';}

?>

<div class="paginas">

	<a href="home.php?acao=ver-usuarios&pg=1">Primeira Página</a>
    
    <?php
		if(isset($_GET['pg'])){
			$num_pg = $_GET['pg'];	
		}
		
		for($i = $pg-$links; $i <= $pg-1; $i++){
			if($i<=0){}
			else{ 
	?>
     
    <a href="home.php?acao=ver-usuarios&pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
     
         
<?php  }} ?>
    
    
    <a href="home.php?acao=ver-usuarios&pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
    

<?php
	for($i = $pg+1; $i <= $pg+$links; $i++){
		if($i>$paginas){}
		else{
?>
			
	<a href="home.php?acao=ver-usuarios&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
		
<?php
		}
	}
?>

<a href="home.php?acao=ver-usuarios&pg=<?php echo $paginas;?>">Última página</a>		

    

</div><!-- paginas -->





<?php
		}
?>

<!-- fim botoes paginacao -->            


          </div>
          <!-- /widget --> 
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->        
     
      
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<script type="text/javascript" src="editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>