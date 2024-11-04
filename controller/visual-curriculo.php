<?php
include("../model/connect.php");

$inicio = 0;
$limite = 5; // Vamos listar 5 vagas por vez
$query = mysqli_query($connect, "SELECT empresa.foto_empresa, empresa.nome_empresa, vagas.hora_vagas, vagas.data_vagas, vagas.area_vagas, vagas.sobre_vagas, vagas.cod_vaga 
                                  FROM vagas 
                                  INNER JOIN empresa ON vagas.cod_empresa = empresa.cod_empresa 
                                  ORDER BY cod_vaga DESC 
                                  LIMIT $inicio,$limite");

while ($exibe = mysqli_fetch_array($query)) {
    echo "  
    <div class='center'>
        <div class='content-post'>
            <div class='top-post'>
                <div class='foto-profile'><img src='../view/imgs/$exibe[0]' class='foto-profile'></div>
                <div class='nome-profile'>
                    <a href='../view/perfilEmp.php' class='aPost'> 
                        @$exibe[1]
                    </a>
                </div>
                <div class='data-post'>$exibe[3], $exibe[2]</div>
            </div>
            <div class='conteudo-post'>
                <strong>Área da Vaga: </strong> $exibe[4] <br>
                <strong>Descrição: </strong> $exibe[5]
            </div>
            <div class='center-post'>
                <form method='POST' action='../controller/enviar-curriculo.php'>
                    <input type='hidden' name='cod_vaga' value='$exibe[6]'>
                    <button type='submit' class='btnCur'>Enviar Currículo</button>
                </form>
            </div>
        </div> <!-- Div content-post -->
    </div>  <!-- Div center -->
    ";
}
?>