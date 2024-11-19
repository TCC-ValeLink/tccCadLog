<?php
include("../view/blades/top.php");
include("../model/connect.php");

$cod_usuario = $_COOKIE['idUsuario'];

$query_feedback = "
SELECT 
    ec.cod_envio_curriculo,
    e.nome_empresa,
    e.foto_empresa,
    v.area_vagas,
    f.status_feedback
FROM feedback f
JOIN envio_curriculo ec ON f.cod_envio_curriculo = ec.cod_envio_curriculo
JOIN empresa e ON ec.cod_empresa = e.cod_empresa
JOIN vagas v ON ec.cod_vagas = v.cod_vagas
WHERE ec.cod_usuario = ?";

$stmt = mysqli_prepare($connect, $query_feedback);

if ($stmt === false) {
    die('Erro na preparação da consulta: ' . mysqli_error($connect));
}

mysqli_stmt_bind_param($stmt, 's', $cod_usuario);
mysqli_stmt_execute($stmt);
$result_feedback = mysqli_stmt_get_result($stmt);

while ($feedback = mysqli_fetch_assoc($result_feedback)) {
    echo "<div class='feedback'>
            <img src='../view/imgs/" . htmlspecialchars($feedback['foto_empresa']) . "' alt='Foto da Empresa' class='foto_empresa'>
            <div class='info'>
                <h3 class='nome_empresa'>Empresa: " . htmlspecialchars($feedback['nome_empresa']) . "</h3>
                <p class='vaga'>Vaga: " . htmlspecialchars($feedback['area_vagas']) . "</p>
                <p class='status_feedback'>Status do Feedback: " . htmlspecialchars($feedback['status_feedback']) . "</p>
            </div>
          </div>";
}

mysqli_stmt_close($stmt);
?>
