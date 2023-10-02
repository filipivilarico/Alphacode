<?php

//Import do arquivo de conexão com BD
require_once('../bd/conexaoMysql.php');

function excluir($idusuario)
{
    $sql = "delete from tblusuario
            where idusuario =".$idusuario;



    $conexao = conexaoMysql();

    if (mysqli_query($conexao, $sql)){

        return true;

    }else{
        return false;
    }
}    


?>