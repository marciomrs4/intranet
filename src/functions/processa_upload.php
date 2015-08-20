<?php

require_once '../config/config.php';
require_once 'funcoes.php';

if( !empty($_FILES['imagem']['tmp_name']) || $_FILES['imagem']['tmp_name']!='none' ) {
    uploadFoto($_FILES['imagem'],$_FILES['imagem']['name']);
} 
header('Location: ' . $_SERVER['HTTP_REFERER']);