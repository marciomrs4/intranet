<?php
    include_once 'componentes/topo.php';
    include_once 'paineis.php';
?>

	<div class="container col-sm-9">
	
		<div class="jumbotron ">

			<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Ramais</h3>
					</div>
				<div class="panel-body">
			<?php
			$tbUsuario = new TbUsuario();
			
			$table = new Grid();
			
			$table->setCabecalho(array('Nome','Ramal','E-mail','Departamento'));
			
			$table->setDados($tbUsuario->listarRamaisIntranet()->fetchAll(\PDO::FETCH_ASSOC));
								
			
			$table->addFunctionColumn(function($string){
				return "<a href='mailto:{$string}'>{$string}</a>";
			},2);

			function fixUtf8($var){
				return utf8_encode($var);
			}		

			$table->addFunctionColumn('fixUtf8',0);

			$table->addFunctionColumn('fixUtf8',3);


			
			$table->show();
			?>
				</div>
                            <div class="panel-footer"></div>
			</div>
		</div>		
	</div>

	
	<?php
             include 'componentes/footer.php';
        ?>

