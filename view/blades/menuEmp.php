<?php Include("top.php")?>

<nav class="menu_ltl">
    <img src="../img/logo.png" style="width:6.4rem; margin-top:2rem; margin-left:1rem;">
        <div class="abre-fecha">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        <ul>
            <li class="item-menu ativo">
                <a href="perfilPrivEmp.php">
                <spam class="img-menu"><i class="bi bi-person-fill"></i></spam>
                <spam class="txt-spam">Perfil</spam>
                </a>
            </li>
            
            <li class="item-menu">
                <a href="./listar-curriculo.php">
                <spam class="img-menu"><i class="bi bi-clipboard2-data-fill"></i></spam>
                <spam class="txt-spam">Curriculos</spam>
                </a>


            </li>
            
            <li class="item-menu">
                <a href="./post.php">
                <spam class="img-menu"><i class="bi bi-plus-circle-fill"></i></spam>
                <spam class="txt-spam">Posts</spam>
                </a>
            </li>

            <li class="item-menu">
                <a href="./CriarVaga.php">
                <spam class="img-menu"><i class="bi bi-briefcase-fill"></i></spam>
                <spam class="txt-spam">Criar uma Vaga</spam>
                </a>
            </li>
        </ul>
</nav>
<script src="../menu.js"></script>
<!-- <i class="bi bi-briefcase-fill"></i> -->
<?php Include("footercomp.php")?>