<li><a href="listarAniversariantes.php"><span class="glyphicon glyphicon-info-sign"></span> Aniversáriantes do Mês</a></li>
<hr>

<?php
$ID = base64_encode(date('d-m-Y') . 'M');
$Uniddade = '1';
$Host = 'localhost';

$RemoteUrl = 'http://' . $Host . '/sga/services/aniversariantesdodia.php?id=' . $ID . '&unidade=' . $Uniddade;

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
