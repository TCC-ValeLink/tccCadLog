<?php include("blades/top.php") ?>
<?php include("blades/src.php") ?>
<div class="body-home">
    <div class="center">
        <div class="content-post">
            <div class="top-post">
                <div class="foto-profile"></div>
                <div class="nome-profile">@contaEmpresa</div>
                <div class="data-post">Data Aleatória</div>
                <button type="submit" id="follow" value="0" function="" name="btnFollow"
                    class="btnFollow">Seguir</button>
            </div>
            <div class="conteudo-post">Postagem da Empresa</div>
            <div class="midia-post">Mídia do Post</div>
            <div class="footer-post">
                <div class="icones">A</div>
                <button type="submit" name="btnLike" id="Like" value="0" onclick="">♡</button>
                <button type="submit" class="btnCur" name="btnCur" id="Like" value="0" onclick="">Enviar
                    Currículo</button>
            </div>
        </div>
    </div>
</div>

<?php include("blades/followemp.php") ?>
<?php include("blades/menu.php") ?>
<?php include("blades/footercomp.php") ?>