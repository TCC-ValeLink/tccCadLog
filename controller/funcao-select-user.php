<?php
include("../model/connect.php");
 
if (isset($_COOKIE['idUsuario'])) {
    $cod_usuario = $_COOKIE['idUsuario'];
 
    // Consulta para o usuário
    $query = mysqli_query($connect, "SELECT foto_usuario, nome_usuario FROM usuario WHERE cod_usuario = '$cod_usuario'");
 
    if ($query) {
        while ($exibe = mysqli_fetch_array($query)) {
            echo "    
<div class='topuser'>
<img src='../img/fundouser.png' class='capauser'>
<img src='../view/imgs-foto-perfil-user/$exibe[0]' class='perfiluser'>
<p class='nomeuser'>$exibe[1]</p>
<div class='funcaoicon'><i class='bi bi-code-slash'></i></div>
<p class='funcaouser'>Programador Mobile</p>
<div class='edituser'><i class='bi bi-pencil-square'></i></div>
<p class='editusertxt'>Aqui você pode rever ou alterar suas informações pessoais...</p>
</div>";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($connect);
    }
} else {
    echo "Usuário não está logado.";
}
?>