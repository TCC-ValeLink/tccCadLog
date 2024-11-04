<?php include("blades/top.php") ?>
<?php include("blades/srcEmp.php") ?>

<div class="body-home">
    <?php include("../controller/funcao-select-emp.php") ?>

    <button type="submit" class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoPost()">
        <i class="bi bi-plus-circle-fill"></i>
    </button>
</div>

<div id="container-create-post" class="container-create-post" style="display: none;">
    <form action="../controller/funcao-create-post.php" method="POST" enctype="multipart/form-data">
        <div class="top-create-post">
            <?php
            include("../model/connect.php");
            $query = mysqli_query($connect, "SELECT foto_empresa, nome_empresa FROM empresa WHERE cod_empresa= '$_COOKIE[idEmpresa]'");
            while ($exibe = mysqli_fetch_array($query)) {
                echo "
                <div class='foto-profile'>
                    <img src='./imgs-foto-perfil-emp/$exibe[0]' class='foto-perfil'>
                </div>
                <div class='nome-profile'>$exibe[1]</div>";
            }
            ?>

            <button type="button" class="btnClose bi bi-x" id="btnClose"
                style="color: lightgreen; font-size: 30px;" onclick="closeModal()"></button>
        </div>

        <textarea rows="4" columns="50" name="conteudo-postagem" placeholder="O que está planejando?"
            class="conteudo-postagem"></textarea>

        <div class="footer-create-post">
            <label for="file-upload" class="midia-post-create">
                <i class="bi bi-image" style="color: lightgreen; font-size: 24px;"></i>
            </label>
            <input type="file" id="file-upload" class="hidden-input" name="arquivo">
            <button class='postar' name='btnPostar' type='submit'>Postar</button>
        </div>
    </form>
</div>

<script>
    function funcaoPost() {
        document.getElementById("container-create-post").style.display = "block";
    }

    function closeModal() {
        document.getElementById("container-create-post").style.display = "none";
    }

    // Fecha o modal ao clicar fora dele
    window.onclick = function (event) {
        const modal = document.getElementById("container-create-post");
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

<?php include("blades/menuEmp.php") ?>
<?php include("blades/footercomp.php") ?>
