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
                <h3 class="panel-title"><span class="glyphicon glyphicon-gift"></span> ANIVERSARIANTES</h3>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">

                    <?php
                    include_once 'listarAniversarianteDia.php';
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

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-gift"></span> Aniversáriantes do Mês</h3>
                </div>
                <div class="panel-body">
                    <?php

                    $ID = base64_encode(date('d-m-Y').'M');
                    $Unidade = '1';
                    $Host = 'localhost';
                    //$Host = '172.22.0.30';

                    $RemoteUrl = 'http://'. $Host .'/sga/services/listadeaniversariante.php?id='. $ID .'&unidade='. $Unidade;

                    $dados = file_get_contents($RemoteUrl);

                    $dados = json_decode($dados);


                    $table = new Grid();

                    $table->setCabecalho(array('Dia','Nome','Departamento'));

                    $table->setDados($dados);

                    $table->show();

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'componentes/footer.php';
?>

