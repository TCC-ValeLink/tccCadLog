<?php
include("../model/connect.php");
if (!isset($_SESSION)) {
    session_start();
}

// Verifica se o ID do usuário está nos cookies
if (!isset($_COOKIE['idUsuario'])) {
    die("Erro: ID do usuário não definido na sessão.");
}

$objetivo = mysqli_real_escape_string($connect, $_POST['objetivo']);
$historico = mysqli_real_escape_string($connect, $_POST['historico']);
$formacao = mysqli_real_escape_string($connect, $_POST['formacao']);
$habilidades = mysqli_real_escape_string($connect, $_POST['habilidades']);

// Insere o currículo na tabela de currículos
$query = "INSERT INTO curriculo (cod_usuario, objetivo_curriculo, historico_profissional_curriculo, formacao_academica_curriculo, habilidade_e_competencias_curriculo) 
          VALUES ('" . $_COOKIE['idUsuario'] . "', '$objetivo', '$historico', '$formacao', '$habilidades')";

if (!mysqli_query($connect, $query)) {
    echo "Erro: " . mysqli_error($connect);
    exit;
}

header("Location:../view/perfil.php");
?>
