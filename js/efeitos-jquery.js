
var $alert = jQuery.noConflict();

$alert(document).ready(function(){
    //Encolhe os paineis do sistema de forma padrao
    $alert(".panel-heading").click(
        function(){
            $alert(this).next().toggle('slow');
        });
    
    $alert(".simpleConfirm").confirm({    	
    	text: "Tem certeza que deseja remover a imagem ?",
    	confirmButton: "Sim",
    	cancelButton: "Não"    	    	
    });

});



