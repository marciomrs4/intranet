<?php
include 'componentes/topo.php';
include 'paineis.php';
?>

<div class="container col-sm-9">

    <div class="jumbotron ">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Lista de Contato Clientes</h3>
            </div>
            <div class="panel-body">
                <?php
                $Grid = new app\Grid();

                $readfile = new \app\ReadCsv();
                $readfile->readFileCsv('./arquivos/ContatosHospitais.csv');

                $Grid->setCabecalho($readfile->getColumn());
                $Grid->setDados($readfile->getLines());

                $Grid->show();
                ?>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>		
</div>


<?php
include 'componentes/footer.php';
?>

