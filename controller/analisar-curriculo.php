<?php
include("../view/blades/top.php");
include("../model/connect.php");

if (!isset($_COOKIE['idEmpresa'])) {
    die("Erro: Empresa não está logada.");
}

$cod_empresa = $_COOKIE['idEmpresa'];

$query_candidaturas = "SELECT 
    ec.cod_envio_curriculo,
    u.cod_usuario,  -- Adiciona o código do usuário para o link do perfil
    u.nome_usuario,
    u.email_usuario,
    u.telefone_usuario,
    u.foto_usuario,
    v.area_vagas,
    c.objetivo_curriculo,
    c.historico_profissional_curriculo,
    f.status_feedback
FROM envio_curriculo ec
JOIN usuario u ON ec.cod_usuario = u.cod_usuario
JOIN curriculo c ON ec.cod_curriculo = c.cod_curriculo
LEFT JOIN feedback f ON ec.cod_envio_curriculo = f.cod_envio_curriculo
JOIN vagas v ON ec.cod_vagas = v.cod_vagas
WHERE ec.cod_empresa = '$cod_empresa'";

$result_candidaturas = mysqli_query($connect, $query_candidaturas);
if (!$result_candidaturas) {
    die("Erro na consulta: " . mysqli_error($connect));
}

while ($candidatura = mysqli_fetch_assoc($result_candidaturas)) {
    echo "<div class='candidatura' onclick='toggleDetails(this)'>
            <div class='resumo'>
                <img src='../view/imgs/" . htmlspecialchars($candidatura['foto_usuario']) . "' alt='Foto do Usuário' class='foto_usuario'>
                <div>
                    <h3><a href='../view/perfil.php?cod_usuario=" . htmlspecialchars($candidatura['cod_usuario']) . "'>" . htmlspecialchars($candidatura['nome_usuario']) . "</a></h3> <!-- Nome com hyperlink para o perfil -->
                    <p>Email: " . htmlspecialchars($candidatura['email_usuario']) . "</p>
                    <p>Área da Vaga: " . htmlspecialchars($candidatura['area_vagas']) . "</p>
                    <p>Status: " . htmlspecialchars($candidatura['status_feedback'] ?? 'Nenhum feedback dado') . "</p>
                </div>
            </div>
            <div class='detalhes' style='display: none;'>
                <p>Telefone: " . htmlspecialchars($candidatura['telefone_usuario']) . "</p>
                <p>Objetivo: " . htmlspecialchars($candidatura['objetivo_curriculo']) . "</p>
                <p>Histórico Profissional: " . nl2br(htmlspecialchars($candidatura['historico_profissional_curriculo'])) . "</p>
                <form action='../controller/status-vagas.php' method='POST'>
                    <input type='hidden' name='cod_envio_curriculo' value='" . htmlspecialchars($candidatura['cod_envio_curriculo']) . "'>
                    <select name='status_feedback'>
                        <option value='em aguardo'>Em Aguardo</option>
                        <option value='aceito'>Aceito</option>
                        <option value='negado'>Negado</option>
                    </select>
                    <button type='submit'>Dar Feedback</button>
                </form>
            </div>
          </div>";
}
?>
<script src="../view/expandir.js"></script>