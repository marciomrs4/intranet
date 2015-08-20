<?php
require_once '../config/config.php';

// Remove a imagem da pasta slides    
$file = filter_input(INPUT_GET, 'file');


  if( is_file(DIR_FOTO.$file) ) {        
        unlink(DIR_FOTO.$file);        
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }    
    header('location: ' . $_SERVER['HTTP_REFERER']);

?>

