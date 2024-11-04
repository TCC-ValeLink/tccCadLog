<?php
include("../model/connect.php");
 
$query = mysqli_query($connect, "SELECT
    usuario.foto_usuario,
    usuario.nome_usuario,
    FLOOR(DATEDIFF(CURDATE(), data_nascimento_usuario) / 365.25) AS idade,
    usuario.cidade_usuario,
    usuario.telefone_usuario,
    usuario.email_usuario
FROM
    curriculo  
INNER JOIN
    usuario ON curriculo.cod_usuario = usuario.cod_usuario  
WHERE
    usuario.cod_usuario = '$_COOKIE[idUsuario]'
ORDER BY
    curriculo.data_criacao_curriculo DESC
LIMIT 1;");
while ($exibe = mysqli_fetch_array($query)) {
    echo "<div class='top-create-curriculo'>
                <div class='foto-curriculo'><img src='./imgs-foto-perfil-user/$exibe[0]' class='foto-curriculo'></div>
                <div class='info-top-curriculo'>
                <h1>$exibe[1] </h1>
                <div class='linha'></div>
                <h4><i class='fas fa-calendar-alt' style='height:20%; width: 10%'></i> $exibe[2] anos</h4>
                <h4><i class='fas fa-home' style='height:20%; width: 12%'></i>$exibe[3]</h4>
                <h4><i class='fas fa-phone' style='height:20%; width:12%'></i>$exibe[4]</h4>
                <h4><i class='fas fa-envelope'></i>$exibe[5]</h4>
                </div>
                </div>"
    ;
}
 
?>