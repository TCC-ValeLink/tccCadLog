<?php
include("../model/connect.php");

$cod_usuario = $_COOKIE['idUsuario'];

// Preparamos a consulta SQL usando um prepared statement
$query_feedback = "
SELECT 
    ec.cod_envio_curriculo,
    e.nome_empresa,
    e.foto_empresa,
    v.area_vagas,  -- Substituímos 'titulo' por 'area_vagas'
    f.status_feedback
FROM feedback f
JOIN envio_curriculo ec ON f.cod_envio_curriculo = ec.cod_envio_curriculo
JOIN empresa e ON ec.cod_empresa = e.cod_empresa
JOIN vagas v ON ec.cod_vagas = v.cod_vagas
WHERE ec.cod_usuario = ?";

// Preparando a query
$stmt = mysqli_prepare($connect, $query_feedback);

if ($stmt === false) {
    // Caso a preparação falhe, exiba um erro
    die('Erro na preparação da consulta: ' . mysqli_error($connect));
}

// Ligando a variável '$cod_usuario' ao prepared statement
mysqli_stmt_bind_param($stmt, 's', $cod_usuario); // 's' para string

// Executando o prepared statement
mysqli_stmt_execute($stmt);

// Pegando o resultado
$result_feedback = mysqli_stmt_get_result($stmt);

// Verificando se há resultados e exibindo-os
while ($feedback = mysqli_fetch_assoc($result_feedback)) {
    echo "<div class='feedback'>
            <h3>Empresa: " . htmlspecialchars($feedback['nome_empresa']) . "</h3>
            <img src='../view/imgs/" . htmlspecialchars($feedback['foto_empresa']) . "' alt='Foto da Empresa'>
            <p>Vaga: " . htmlspecialchars($feedback['area_vagas']) . "</p> <!-- Exibindo a área da vaga -->
            <p>Status do Feedback: " . htmlspecialchars($feedback['status_feedback']) . "</p>
          </div>";
}

// Fechando o prepared statement
mysqli_stmt_close($stmt);
?>
