<?php
include("../model/connect.php");

$inicio = 0;
$limite = 1;

$query = mysqli_query($connect, "SELECT
    empresa.foto_empresa,
    empresa.nome_empresa,
    vagas.sobre_vagas,
    vagas.carga_horaria_vagas,
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
    $sobre_vagas_limited = substr($exibe['sobre_vagas'], 0, 150);
    if (strlen($exibe['sobre_vagas']) > 150) {
        $sobre_vagas_limited .= '...';
    }

    echo "  
    <div class='center'>
        <div class='content-post'>
            <div class='top-post'>
                <div class='foto-profile'><img src='../view/imgs/{$exibe['foto_empresa']}' class='foto-profile'></div>
                <div class='nome-profile'>
                    <a href='../view/perfilEmp.php' class='aPost'>
                        {$exibe['nome_empresa']}
                    </a>
                </div>
            </div>
            <div class='conteudo-post'>
                <p><h3>Sobre:</h3> $sobre_vagas_limited</p>
                <p><h3>Carga Horária:</h3> {$exibe['carga_horaria_vagas']}</p>
                <p><h3>Pré-requisitos:</h3> {$exibe['pre_requisitos_vagas']}</p>
                <p><h3>Benefícios:</h3> {$exibe['beneficios_vagas']}</p>
                <p><h3>Salário:</h3> {$exibe['salario_vagas']}</p>
                <p><h3>Tipo:</h3> {$exibe['tipos_vagas']}</p>
                <p><h3>Tempo de Contrato:</h3> {$exibe['tempo_contrato_vagas']}</p>
            </div>
            <div class='footer-post'>
                <form method='POST' action='../controller/enviar_curriculo.php' onsubmit='return enviarCurriculo(this)'>
                    <input type='hidden' name='cod_empresa' value='{$exibe['cod_empresa']}'>
                    <input type='hidden' name='cod_vagas' value='{$exibe['cod_vagas']}'>
                    <button type='submit' class='btnCur' id='btnCur{$exibe['cod_vagas']}' name='btnCur'>Enviar Currículo</button>
                </form>
            </div>
        </div>
    </div>";
}
?>


<script>
    function enviarCurriculo(form) {
        var button = form.querySelector('button');


        form.submit();


        button.textContent = 'Enviado';


        button.style.backgroundColor = 'green';
        button.style.color = 'white';


        setTimeout(function () {
            button.disabled = true;
        }, 100);
        return false;
    }
</script>