<?php
include("../model/connect.php");

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o usuário está logado
    if (!isset($_COOKIE['idUsuario'])) {
        die("Erro: Usuário não está logado.");
    }

    $cod_usuario = $_COOKIE['idUsuario'];

    // Obtém os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];
    $estado_civil = $_POST['Estado_civil'];
    $def = $_POST['def'];
    $espec = $_POST['espec'];
    $sexo = $_POST['sex'];

    // Atualiza os dados no banco de dados
    $query_update = "UPDATE usuario 
                     SET nome = ?, data_nascimento = ?, RG = ?, CPF = ?, estado_civil = ?, deficiencia = ?, especificacao_def = ?, sexo = ? 
                     WHERE id = ?";
    $stmt = $connect->prepare($query_update);
    $stmt->bind_param("ssssssssi", $nome, $data, $RG, $CPF, $estado_civil, $def, $espec, $sexo, $cod_usuario);

    if ($stmt->execute()) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . $connect->error;
    }
}
?>
