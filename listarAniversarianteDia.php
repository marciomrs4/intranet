<li><a href="listarAniversariantes.php"><span class="glyphicon glyphicon-info-sign"></span> Aniversáriantes do Mês</a></li>
<hr>

<?php

$RemoteUrl = 'http://' . Host . '/sga/services/aniversariantesdodia.php?id=' . ID . '&unidade=' . Unidade;

$dados = file_get_contents($RemoteUrl);

$dados = json_decode($dados);

if ($dados) {

    foreach ($dados as $arrays) {
        echo '<span class="estiloniver">';
        foreach ($arrays as $array) {
            echo $array, '<br>';
        }
        echo '</span>';
    }
} else {
    echo 'Não há aniversáriantes hoje';
}
?>
