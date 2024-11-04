<?php
include("../model/connect.php");
 
if (isset($_COOKIE['idEmpresa'])) {
    $cod_empresa = $_COOKIE['idEmpresa'];
 
 
    $query = mysqli_query($connect, "SELECT foto_empresa, nome_empresa FROM empresa WHERE cod_empresa = '$cod_empresa'");
 
    if ($query) {
        while ($exibe = mysqli_fetch_array($query)) {
            echo "    
<div class='topemp'>
<img src='../img/fundouser.png' class='capauser'>
<img src='../view/imgs/$exibe[0]' class='perfilemp'>
<p class='nomeemp'>$exibe[1]</p>
<div class='funcaoicon'><i class='bi bi-code-slash'></i></div>
<p class='funcaoemp'>Programador Mobile</p>
<div class='editemp'><i class='bi bi-pencil-square'></i></div>
<p class='editemptxt'>Uma breve descrição sobre a empresa</p>
</div>";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($connect);
    }
} else {
    echo "Erro na seleção do Cookie.";
}
?>