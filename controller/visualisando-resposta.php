<?php
include("../model/connect.php");

$cod_usuario = $_COOKIE['idUsuario'];


$query_feedback = "SELECT 
    ec.cod_envio_curriculo,
    e.nome_empresa,
    e.foto_empresa,
    v.titulo,
    f.status_feedback
FROM feedback f
JOIN envio_curriculo ec ON f.cod_envio_curriculo = ec.cod_envio_curriculo
JOIN empresa e ON ec.cod_empresa = e.cod_empresa
JOIN vagas v ON ec.cod_vagas = v.cod_vagas
WHERE ec.cod_usuario = '$cod_usuario'";

$result_feedback = mysqli_query($connect, $query_feedback);

while ($feedback = mysqli_fetch_assoc($result_feedback)) {
    echo "<div class='feedback'>
            <h3>Empresa: " . htmlspecialchars($feedback['nome_empresa']) . "</h3>
            <img src='../view/imgs/" . htmlspecialchars($feedback['foto_empresa']) . "' alt='Foto da Empresa'>
            <p>Vaga: " . htmlspecialchars($feedback['titulo']) . "</p>
            <p>Status do Feedback: " . htmlspecialchars($feedback['status_feedback']) . "</p>
          </div>";
}
?>
