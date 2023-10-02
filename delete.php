<?php


    //Import do arquivo de configuração de constantes 
    require_once('../functions/constantes.php');

    //Import do arquivo para excluir BD 
    require_once(SRC.'bd/excluirUsuario.php');

    //O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir 
    $idusuario = $_GET['id'];

    //Chama a função excluir e encaminha o ID que será removido do BD 
    if(excluir($idusuario)){
        echo(BD_USUARIO_EXCLUIR);

    }else{
            echo("
                <script>
                alert('". BD_MSG_ERRO ."');
                window.history.back();
                </script>");
        }
    
?>
    