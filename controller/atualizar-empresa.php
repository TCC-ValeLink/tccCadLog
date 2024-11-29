<?php
// Inclua a conexão com o banco de dados
include("../model/connect.php");

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Monta a query de atualização
    $query = "UPDATE empresa SET 
        email_empresa = ?, 
        senha_empresa = ?, 
        CNPJ_empresa = ?, 
        nome_empresa = ?, 
        proprietario_empresa = ?, 
        area_de_atuacao_empresa = ?, 
        telefone_empresa = ?, 
        CEP_empresa = ?, 
        foto_empresa = ?, 
        cidade_empresa = ?, 
        rua_empresa = ?, 
        bairro_empresa = ?, 
        numero_empresa = ?, 
        quantidade_de_funcionario_empresa = ?, 
        video_empresa = ?, 
        imagem_banner_empresa = ?, 
        descricao_da_empresa = ?
        WHERE cod_empresa = ?";

    $stmt = $connect->prepare($query);

    // Vincula os parâmetros do formulário
    $stmt->bind_param(
        "sssssssssssssssssi",
        $_POST['email_empresa'],
        $_POST['senha_empresa'],
        $_POST['CNPJ_empresa'],
        $_POST['nome_empresa'],
        $_POST['proprietario_empresa'],
        $_POST['area_de_atuacao_empresa'],
        $_POST['telefone_empresa'],
        $_POST['CEP_empresa'],
        $_POST['foto_empresa'],
        $_POST['cidade_empresa'],
        $_POST['rua_empresa'],
        $_POST['bairro_empresa'],
        $_POST['numero_empresa'],
        $_POST['quantidade_de_funcionario_empresa'],
        $_POST['video_empresa'],
        $_POST['imagem_banner_empresa'],
        $_POST['descricao_da_empresa'],
        $_POST['cod_empresa']
    );

    // Executa a query
    if ($stmt->execute()) {
        header('Location:../view/perfilPrivEmp.php');
    } else {
        echo "Erro ao atualizar as informações: " . $stmt->error;
    }
}
?>
