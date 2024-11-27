<?php

include("../model/connect.php");

// Verifica se o usuário está logado
if (!isset($_COOKIE['idUsuario'])) {
    die("Erro: Usuário não está logado.");
}

// Obtém o ID do usuário logado
$cod_usuario = $_COOKIE['idUsuario'];

// Busca o currículo do usuário no banco de dados usando uma query preparada
$query = "SELECT 
    objetivo_curriculo, 
    historico_profissional_curriculo, 
    formacao_academica_curriculo, 
    habilidade_e_competencias_curriculo 
    FROM curriculo 
    WHERE cod_usuario = ?";
$stmt = $connect->prepare($query);
$stmt->bind_param("i", $cod_usuario);
$stmt->execute();
$result = $stmt->get_result();
$curriculo = $result->fetch_assoc();

// Verifica se o currículo existe
if (!$curriculo) {
    die("Erro: Nenhum currículo encontrado para este usuário.");
}
?>

<div id='container-geral2' class='container-create-curriculo'>
    <button type='submit' class='btnCloseCur bi bi-x' id='btnClose2'
        style='color: lightgreen; font-size: 30px;'></button>

    <form action='../controller/atualizar-curriculo.php' method='POST'>
        <?php include('../controller/select-top-curriculo.php') ?>

        <label for='objetivo'>
            <h2>Objetivo:</h2>
        </label><br>
        <textarea id='objetivo' class='conteudo-curriculo' name='objetivo' required>
            <?= htmlspecialchars($curriculo['objetivo_curriculo']) ?>
        </textarea><br><br>

        <label for='historico' class='cur'>
            <h2>Histórico Profissional:</h2>
        </label><br>
        <textarea id='historico' class='conteudo-curriculo' name='historico' required>
            <?= htmlspecialchars($curriculo['historico_profissional_curriculo']) ?>
        </textarea><br><br>

        <label for='formacao' class='cur'>
            <h2>Formação Acadêmica:</h2>
        </label><br>
        <textarea id='formacao' class='conteudo-curriculo' name='formacao' required>
            <?= htmlspecialchars($curriculo['formacao_academica_curriculo']) ?>
        </textarea><br><br>

        <label for='habilidades' class='cur'>
            <h2>Habilidades/Competências:</h2>
        </label><br>
        <textarea id='habilidades' name='habilidades' class='conteudo-curriculo' required>
            <?= htmlspecialchars($curriculo['habilidade_e_competencias_curriculo']) ?>
        </textarea><br><br>
        
        <input type='submit' class='btnCurriculo' value='Atualizar Currículo'>
    </form>
</div>
<script src='../abrir.js'></script>
