<?php

include("../model/connect.php");

$inicio = 0;
$limite = 1;
$query = mysqli_query($connect, "SELECT empresa.foto_empresa, empresa.nome_empresa, post.hora_post, post.data_post, post.conteudo_post, post.midia_post FROM post INNER JOIN empresa ON post.cod_empresa = empresa.cod_empresa ORDER BY cod_post DESC LIMIT $inicio,$limite");

while ($exibe = mysqli_fetch_array($query)) {

    $midiaPost = $exibe[5];
    $imagemPost = (!empty($midiaPost) && file_exists('../view/imgs/'.$midiaPost)) ? $midiaPost : null;

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
                <div class='data-post'>$exibe[2], $exibe[3]</div>
               
            </div>
            <div class='conteudo-post'>$exibe[4]</div>
            <div class='center-post'>";
                
    if ($imagemPost) {
        echo "<div class='midia-post'><img src='../view/imgs/$imagemPost' style='width: 50%; height:auto;'></div>";
    } else {

    }

    echo "  </div>
            <div class='footer-post'>
                
            </div>
        </div> <!-- Div content-post -->
    </div>  <!-- Div center -->

<script>
    function mudarCor(botao)
    {
        botao.classList.toggle('btnClicado')
    }
</script>";
}
?>
