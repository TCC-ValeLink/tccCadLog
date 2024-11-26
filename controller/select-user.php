<?php
include("../model/connect.php");

// Verifica se o usuário está logado
if (!isset($_COOKIE['idUsuario'])) {
    die("Erro: Usuário não está logado.");
}

$cod_usuario = $_COOKIE['idUsuario'];

// Consulta para buscar informações do usuário
$query_user = "SELECT nome, data_nascimento, RG, CPF, estado_civil, deficiencia, especificacao_def, sexo FROM usuario WHERE id = ?";
$stmt = $connect->prepare($query_user);
$stmt->bind_param("i", $cod_usuario);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

// Verifica se os dados do usuário foram encontrados
if (!$usuario) {
    die("Erro: Nenhum usuário encontrado.");
}

// Envia os dados para o front-end
echo json_encode($usuario);
?>
