<?php
include("../model/connect.php");

$inicio = 0;
$limite = 1;

$query = mysqli_query($connect, "SELECT
    empresa.foto_empresa,
    empresa.nome_empresa,
    vagas.sobre_vagas,
    vagas.carga_horaria_vagas,
    vagas.area_vagas,
    vagas.pre_requisitos_vagas,
    vagas.beneficios_vagas,
    vagas.salario_vagas,
    vagas.tipos_vagas,
    vagas.tempo_contrato_vagas,
    vagas.cod_vagas,
    empresa.cod_empresa
FROM vagas
INNER JOIN empresa ON vagas.cod_empresa = empresa.cod_empresa
ORDER BY vagas.cod_vagas DESC LIMIT $inicio, $limite");

while ($exibe = mysqli_fetch_array($query)) {
    echo "
    <div class='job-card'>
        <div class='job-header d-flex justify-content-between align-items-center'>
            <div class='d-flex align-items-center'>
                <img src='../view/imgs/{$exibe['foto_empresa']}' alt='Logo Empresa' class='company-logo'>
                <div class='ms-3'>
                    <h5 class='mb-0'>{$exibe['nome_empresa']}</h5>
                    <small class='text-muted'>2hrs atrás</small>
                </div>
            </div>
            <button class='btn btn-success btn-sm'>Seguir</button>
        </div>
        <div class='job-body mt-3'>
            <div class='row'>
                <div class='col-6'>
                    <p><i class='bi bi-info-circle'></i> <strong>Sobre:</strong> {$exibe['sobre_vagas']}</p>
                    <p><i class='bi bi-briefcase'></i> <strong>Área:</strong> {$exibe['area_vagas']}</p>
                    <p><i class='bi bi-plus-circle'></i> <strong>Benefícios:</strong> {$exibe['beneficios_vagas']}</p>
                    <p><i class='bi bi-house-door'></i> <strong>Tipo:</strong> {$exibe['tipos_vagas']}</p>
                </div>
                <div class='col-6'>
                    <p><i class='bi bi-clock'></i> <strong>Carga Horária:</strong> {$exibe['carga_horaria_vagas']}</p>
                    <p><i class='bi bi-mortarboard'></i> <strong>Pré-requisitos:</strong> {$exibe['pre_requisitos_vagas']}</p>
                    <p><i class='bi bi-currency-dollar'></i> <strong>Salário:</strong> R$ {$exibe['salario_vagas']}</p>
                    <p><i class='bi bi-file-earmark-text'></i> <strong>Tempo de contrato:</strong> {$exibe['tempo_contrato_vagas']} anos</p>
                </div>
            </div>
        </div>
        <div class='job-footer mt-3 d-flex justify-content-between align-items-center'>
            <small class='text-muted'><i class='bi bi-heart'></i> 6 curtidas</small>
            <form method='POST' action='../controller/enviar_curriculo.php' onsubmit='return enviarCurriculo(this)'>
                <input type='hidden' name='cod_empresa' value='{$exibe['cod_empresa']}'>
                <input type='hidden' name='cod_vagas' value='{$exibe['cod_vagas']}'>
                <button type='submit' class='btn btn-primary btn-sm'>Enviar Currículo</button>
            </form>
        </div>
    </div>";
}
?>

<script>
    function enviarCurriculo(form) {
        const button = form.querySelector('button');
        button.textContent = 'Enviado';
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');
        button.disabled = true;
        return false;
    }
</script>

<style>
    .job-card {
        margin-top: 2%;
        width: 30%;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
        background-color: #fff;
        font-family: Arial, sans-serif;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-left: 30%;
    }

    .job-header {
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 12px;
    }

    .company-logo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .job-body p {
        font-size: 14px;
        margin-bottom: 8px;
    }

    .job-body i {
        color: #2ecc71;
        margin-right: 6px;
    }

    .job-footer {
        border-top: 1px solid #f1f1f1;
        padding-top: 12px;
    }
</style>
