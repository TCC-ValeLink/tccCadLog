<?php

  include("../model/connect.php");

  $query = mysqli_query($connect, "SELECT empresa.foto_empresa, empresa.nome_empresa, post.hora_post, post.data_post, post.conteudo_post, post.midia_post FROM post INNER JOIN empresa ON post.cod_empresa = empresa.cod_empresa ORDER BY cod_post DESC");
  while ($exibe = mysqli_fetch_array($query)) {
      echo "  
       <div class='center'>
        <div class='content-post'>
            <div class='top-post'>
                <div class='foto-profile'><img src='../view/imgs-post/$exibe[0]' class='foto-profile'></div>
                <div class='nome-profile'>
                    <a href='../view/perfilEmp.php' class='aPost'> 
                        @$exibe[1]
                    </a>
                </div>
                <div class='data-post'>$exibe[2], $exibe[3]</div>
                <button type='submit' id='follow' value='0' function='' name='btnFollow'
                    class='btnFollow'>Seguir</button>
            </div>
            <div class='conteudo-post'>$exibe[4]</div>
            <div class='center-post'>
            <div class='midia-post'><img src='../view/imgs-post/$exibe[5]' style='width: 50%; height=auto;'></div>
            </div>
            <div class='footer-post'>

                <button type='submit' name='btnLike' id='like' value='0' onclick='mudarCor(this)' class='btnLike'><i class='bi bi-heart-fill'></i></button>
                <button type='submit' class='btnCur' name='btnCur' id='Like' value='0'>Enviar</button>
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

