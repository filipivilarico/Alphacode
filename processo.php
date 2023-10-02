<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuario (nome, email, dataNascimento, celular, create) VALUES ('$nome', '$email', '$dataNascimento', '$celular')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($mysqli)) {
    $_SESSION['msg'] = "<p style='color:green;'> <strong>Usuario Cadastrado com Sucesso</strong></p>";
    header("Location: cadastro.php");
} else{
    header("Location: cadastro.php");
}
?>