<?php
include("../model/connect.php");
if (!isset($_SESSION)) {
    session_start();
}
 
// Verifica se o ID da empresa está nos cookies
if (!isset($_COOKIE['idEmpresa'])) {
    die("Erro: ID da empresa não definido na sessão.");
}
 
$hora = date('H:i:s');
$hoje = date('Y-m-d');
$strD = str_replace('/', '', $hoje);
$strH = str_replace(':', '', $hora);
 
// Limpa possíveis injeções de SQL nas variáveis
$cod_empresa = mysqli_real_escape_string($connect, $_COOKIE['idEmpresa']);
$area_vagas = mysqli_real_escape_string($connect, $_POST["area_vagas"]);
$sobre_vagas = mysqli_real_escape_string($connect, $_POST["sobre_vagas"]);
$carga_horaria_vagas = mysqli_real_escape_string($connect, $_POST["carga_horaria_vagas"]);
$pre_requisitos_vagas = mysqli_real_escape_string($connect, $_POST["pre_requisitos_vagas"]);
$beneficios_vagas = mysqli_real_escape_string($connect, $_POST["beneficios_vagas"]);
$salario_vagas = mysqli_real_escape_string($connect, $_POST["salario_vagas"]);
$tipos_vagas = mysqli_real_escape_string($connect, $_POST["tipos_vagas"]);
$tempo_contrato_vagas = mysqli_real_escape_string($connect, $_POST["tempo_contrato_vagas"]);
 
// Verifica se o cod_empresa existe na tabela empresa
$result = mysqli_query($connect, "SELECT * FROM empresa WHERE cod_empresa = '$cod_empresa'");
if (mysqli_num_rows($result) === 0) {
    die("Erro: ID da empresa não encontrado.");
}
 
// Insere a vaga na tabela de vagas
$query = "INSERT INTO vagas (cod_empresa, area_vagas, hora_vagas, data_vagas, sobre_vagas, carga_horaria_vagas, pre_requisitos_vagas, beneficios_vagas, salario_vagas, tipos_vagas, tempo_contrato_vagas)
          VALUES ('$cod_empresa', '$area_vagas', '$strH', '$strD', '$sobre_vagas', '$carga_horaria_vagas', '$pre_requisitos_vagas', '$beneficios_vagas', '$salario_vagas', '$tipos_vagas', '$tempo_contrato_vagas')";
 
if (!mysqli_query($connect, $query)) {
    echo "Erro: " . mysqli_error($connect);
    exit;
}
 
header("location:../view/criarVaga.php");
?>