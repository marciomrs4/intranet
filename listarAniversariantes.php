<?php
include_once 'componentes/topo.php';
include_once 'paineis.php';
?>

<div class="container col-sm-9">

    <div class="jumbotron ">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-gift"></span> Aniversáriantes do Mês</h3>
            </div>
            <div class="panel-body">
                <?php
                $ID = base64_encode(date('d-m-Y') . 'M');
                $Unidade = '1';
                $Host = 'localhost';
                //$Host = '172.22.0.30';

                $RemoteUrl = 'http://' . $Host . '/sga/services/listadeaniversariante.php?id=' . $ID . '&unidade=' . $Unidade;

                $dados = file_get_contents($RemoteUrl);

                $dados = json_decode($dados);


                $table = new Grid();

                $table->setCabecalho(array('Dia', 'Nome', 'Departamento'));

                $table->setDados($dados);

                $table->show();
                ?>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
</div>

<?php
include_once 'componentes/footer.php';
?>

