<?php
    include_once 'componentes/topo.php';
?>
    <div class="container">        
        <br>
        <div class="jumbotron">
                       
            <div class="panel panel-primary">
            	<div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-wrench"></span> ADMINISTRAÇÃO DE SLIDES - INTRANET CEADIS</h3>
		    	</div>
                <div class="panel-body">
                    <form class="form-inline" action="componentes/processa_upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="imagem"><span class="glyphicon glyphicon-plus-sign"></span> Adicionar Nova Imagem</label>
                           <input type="file" name="imagem" id="imagem" required> 
                           <br>
                        </div> 
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Salvar</button>
                    </form> 
                </div>
            </div>           
            
            <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-picture"></span> SLIDES ATIVOS</h3>
				</div>
				
				<div class="panel-body">					
                  <div class="table-responsive">
                    <table class="table table-striped">
                                            
                       <?php
                         $diretorio = new DirectoryIterator('img/slides');                                          
                         $x =1;
                         foreach ($diretorio as $arquivo) {
                         if($arquivo->isDot()){ continue; }                                                                                        
                       ?> 
                                            
                         <tr>                                                
                         
                          <td><?php echo $x; ?></td>
                          <td class="imagem"><a href="img/slides/<?php echo $arquivo->getFilename();?>" title="Visualizar imagem" target="_blank"> 
                              <img src="img/slides/<?php echo $arquivo->getFilename();?>" class="img-responsive"></a></td> 
                          <td><?php echo strtoupper(substr($arquivo->getFilename(),0,-4));?></td>
                          <td class="center remover">                                                    
                              <a class="simpleConfirm" title="Remover imagem" href="componentes/processa_delete.php?file=<?php echo $arquivo->getFilename();?>">
                              <img src="img/remover.png" alt=""/></a>                                                                                                                                                    
                          </td>
                                                
                         </tr>
                                            
                         <?php                                             
                           $x++;
                           }
                          ?>                                            
                                                                                                                                                                                                                           
                        </table>                                        
                      </div>                                                                         
                    </div>                           
                  </div>        
              </div>
    </div>
        
<?php
include_once 'componentes/footer.php';
?>