<?php
include_once 'componentes/topo.php';
include_once 'paineis.php';
?>

<div class="container col-sm-9">

    <div class="jumbotron ">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Lista de Contato Clientes</h3>
            </div>
            <div class="panel-body">
                <?php
                $Grid = new Grid();

                $array;
                foreach (file('./arquivos/ContatosHospitais.csv') as $dados) {
                    $array[] = explode(';', $dados);
                }


                $Grid->setCabecalho(array('Hospital', 'Responsável', 'Telefone'));
                $Grid->setDados($array);

                $Grid->show();
                ?>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>		
</div>


<?php
include_once 'componentes/footer.php';
?>

