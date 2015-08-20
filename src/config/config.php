<?php
/**
 * @example Funcao para carregar todas as classes model
 *
 */
session_start();

//error_reporting(~E_ALL);

date_default_timezone_set('America/Sao_Paulo');

define('DIR_FOTO', '../../img/slides/');

define('ID',base64_encode(date('d-m-Y') . 'M'));
define('Unidade', '1');
define('Host','localhost');
//define('Host','187.62.217.158:2460');

?>
