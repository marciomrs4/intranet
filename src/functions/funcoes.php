<?php
 
function uploadFoto($arquivo, $novo_nome) {

    //Tamanho máximo permitido para upload
    define('MAX_UPLOAD_SIZE', '5000');

    // Variável que armazenará o resultado do Upload
    $resultado = '';

    // Array com os tipos aceitos 
    $tipos_aceitos = array('image/jpg', 'image/jpeg', 'image/png');

    // Obtêm a extensão do arquivo (jpg, jpeg, png)
    $extensao = explode('.', $arquivo['name']);
    $extensao = strtolower(end($extensao));

    //Verifica possíveis erros.
    if(!empty($arquivo['error']))
    {
        switch($arquivo['error'])
        {
            case '1':
                $resultado = 'O arquivo excedeu o tamanho máximo permitido pelas configurações do servidor.';
                break;
            case '2':
                $resultado = 'O arquivo excedeu o tamanho máximo permitido pelas configurações do formulário.';
                break;
            case '3':
                $resultado = 'O arquivo foi parcialmente upado (incompleto). tente novamente.';
                break;
            case '4':
                $resultado = 'Nenhum arquivo para upload.';
                break;
            case '6':
                $resultado = 'Faltando uma pasta temporária.';
                break;
            case '7':
                $resultado = 'Falha ao escrever o arquivo no disco.';
                break;
            case '8':
                $resultado = 'Arquivo com extensão não aceita.';
                break;
            default:
                $resultado = 'Houve um erro desconhecido. Tente novamente.';
        }
    }
    elseif( !is_uploaded_file($arquivo['tmp_name']) )
    {
        $resultado = 'O arquivo não foi upado.';
    }
    elseif( !in_array($arquivo['type'], $tipos_aceitos) )
    {
        $resultado = "O arquivo deve ser uma imagem JPG, JPEG ou PNG.";
    }
    elseif( filesize($arquivo['tmp_name']) > MAX_UPLOAD_SIZE*512 )
    {
        $resultado = 'Imagem muito grande. Não pode ter mais que 2MB.';
    }
    elseif( !getimagesize($arquivo['tmp_name']) )
    {
        $resultado = 'Esse arquivo não é uma imagem.';
    }
    elseif( !preg_match('/^[jpg|png|jpeg]{3,4}$/', $extensao) ) {
        $resultado = 'Extensão de arquivo inválida.';
    }
    else
    {
        // Novo nome do arquivo upado
        $nome = $novo_nome;

        // Move o arquivo que antes era temporário para a pasta correta
        if( move_uploaded_file($arquivo["tmp_name"], DIR_FOTO . $nome) ) {
            $resultado = TRUE;
            header('location: '.$_SERVER['HTTP_REFERER']);
            //Remove imagens antigas que possa ter de outras extensões
            //removeImagemAntiga($nome, $novo_nome);
        } else {
            $resultado = 'Erro ao mover o arquivo para a pasta.';
        }
    }
    
    return $resultado;
}

