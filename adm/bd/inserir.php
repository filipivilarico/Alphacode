<?php

//Import do arquivo de conexão com BD
require_once('../bd/conexaoMysql.php');

function inserirusuario($arrayusuario)
{

    $sql = "insert into tblusuario
                (
                    nome,
                    email,
                    dataNascimento,
                    celular
                )
                values
                (
                  '".$arrayusuario['nome']."',
                  '".$arrayusuario['email']."',
                  '".$arrayusuario['dataNascimento']."',
                  '".$arrayusuario['celular']."'   
    )";

    $conexao = conexaoMysql();

    if(mysqli_query($conexao, $sql)){

        return true;

    }else{
        return false;
    }
    
    

}