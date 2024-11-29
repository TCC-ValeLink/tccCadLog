<?php
include("../model/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cod_usuario = $_COOKIE['idUsuario'];

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $estado_civil = $_POST['estado_civil'];
    $deficiencia = $_POST['deficiencia'];
    $especificacao = $_POST['especificacao'];
    $sexo = $_POST['sexo'];

    $query = "UPDATE usuario SET nome = ?, data_nascimento = ?, rg = ?, cpf = ?, estado_civil = ?, deficiencia = ?, especificacao = ?, sexo = ? WHERE id = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("ssssssssi", $nome, $data_nascimento, $rg, $cpf, $estado_civil, $deficiencia, $especificacao, $sexo, $cod_usuario);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Dados atualizados com sucesso!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Erro ao atualizar os dados."]);
    }
}
?>