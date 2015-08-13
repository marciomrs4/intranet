<?php
/**
 * @example Funcao para carregar todas as classes model
 *
 */
session_start();

error_reporting(~E_ALL);


$_SESSION['projeto'] = 'sga';

require_once "autoload.php";

date_default_timezone_set('America/Sao_Paulo');


?>
