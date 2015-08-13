<?php
    include 'componentes/topo.php';
?>

	<div class="container-fluid ">
		<div class="col-sm-3">
		
		<div class="jumbotron">
			<div>	
				<img alt="CEADIS" src="img/logoceadis.png"  class="img-rounded img-thumbnail img-responsive" />
			</div>
		</div>
		
		
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-share-alt"></span> LINKS DE ACESSO</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
					<?php 
						include_once 'links.php';
					?>					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>

		<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> INFORMAÇÕES</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
				<?php 
					include_once 'linksRamais.php';
				?>
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>
		
		<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-gift"></span> ANIVERSARIANTES DO DIA</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
					
				<?php
				//Lista de aniversatiantes, classe de dentro do pacote model do SGA
								 
				$tbAniversariante = new TbAniversariante();
																
				foreach ($tbAniversariante->listAniversarianteDia() as $valor):
				
					echo '<span class="estiloniver">' . $valor['0'] . ' | ', 
						 $valor['1']  . '<br />' . '<hr>' . '</span>' ;
				
				endforeach;						
				
                                if ($valor <= 0){
                                    echo  '<span class="estiloniver"> <span class="glyphicon glyphicon-exclamation-sign"></span> Não há aniversariantes hoje </span>';
                                }
                                
				?>
					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>
                    
                 <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-wrench"></span> SISTEMAS DE HOMOLOGAÇÃO</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
				<?php 
					include_once 'linksHomol.php';
				?>
					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>     

	</div>
	<div class="container col-sm-9">
	
		<div class="jumbotron ">

			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Contato Clientes</h3>
					</div>
				<div class="panel-body">
			<?php

			$Grid = new Grid();
			
			$array;
			foreach( file('./arquivos/ContatosHospitais.csv') as $dados){
				$array[] = explode(';', $dados);
			}
				
			
			$Grid->setCabecalho(array('Hospital','Responsável','Telefone'));
			$Grid->setDados($array);
			
			$Grid->show();
			?>
				</div>
			</div>
		</div>		
	</div>
</div>
	
	<?php
            include 'componentes/footer.php';
        ?>

