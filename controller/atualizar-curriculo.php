<?php
include("../model/connect.php");

// Verifica se o usuário está logado
if (!isset($_COOKIE['idUsuario'])) {
    die("Erro: Usuário não está logado.");
}

// Obtém o ID do usuário logado
$cod_usuario = $_COOKIE['idUsuario'];

// Valida e obtém os dados enviados pelo formulário
$objetivo = mysqli_real_escape_string($connect, $_POST['objetivo']);
$historico = mysqli_real_escape_string($connect, $_POST['historico']);
$formacao = mysqli_real_escape_string($connect, $_POST['formacao']);
$habilidades = mysqli_real_escape_string($connect, $_POST['habilidades']);

// Atualiza o currículo no banco de dados
$query_update = "UPDATE curriculo SET 
    objetivo_curriculo = ?, 
    historico_profissional_curriculo = ?, 
    formacao_academica_curriculo = ?, 
    habilidade_e_competencias_curriculo = ? 
    WHERE cod_usuario = ?";
$stmt = $connect->prepare($query_update);
$stmt->bind_param("ssssi", $objetivo, $historico, $formacao, $habilidades, $cod_usuario);

if ($stmt->execute()) {
    echo "Currículo atualizado com sucesso!";
    header("Location: ../view/home.php");
} else {
    die("Erro ao atualizar o currículo: " . $stmt->error);
}
?>
