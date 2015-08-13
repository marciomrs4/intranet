<?php

session_start();

require_once "config.php";
require_once "funcoes.php";

// Remove a imagem da pasta slides    
$file = filter_input(INPUT_GET, 'file');


  if( is_file(DIR_FOTO.$file) ) {        
        unlink(DIR_FOTO.$file);        
        header('Location: ../gi.php');
    }    
    header('Location: ../gi.php');

?>

