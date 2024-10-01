<?php include("blades/top.php") ?>
<?php include("blades/src.php") ?>
<div class="body-home">
    <div class="topuser">
        <img src="../img/fundouser.png" class="capauser">
        <img src="../img/iconuser.png" class="perfiluser">
        <p class="nomeuser">Carlos Arthur Guilherme</p>
        <div class="funcaoicon"><i class="bi bi-code-slash"></i></div>
        <p class="funcaouser">Programador Mobile</p>

        <div class="edituser"><i class="bi bi-pencil-square"></i></div>
        <p class="editusertxt">Aqui você pode rever ou alterar suas informações pessoais...</p>
        <button type="submit" class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoPost()">Criar
            postagem</button>
    </div>
</div>


<div id="container-create-post" class="container-create-post">
    <forms method="POST" action="../controller/create-post.php">
        <div class="top-create-post">
            <div class="foto-profile"></div>
            <div class="nome-profile">Nome</div>
            <button type="submit" class="btnClose bi bi-x" id="btnClose"
                style="color: lightgreen; font-size: 30px;"></button>
        </div>

        <textarea rows="4" columns="50" name="conteudo-postagem" placeholder="O que está planejando?"
            class="conteudo-postagem"></textarea>

        <div class="footer-create-post">
            <label for="file-upload" class="midia-post">
                <i class="bi bi-image " style="color: lightgreen; font-size: 24px;"></i>
            </label>
            <input type="file" id="file-upload" class="hidden-input" name="arquivo">
            <button class='postar' nome='btnPostar' type='submit'>Postar</button>
        </div>

    </forms>
</div>;

<script>
    function funcaoPost() {
        document.getElementById("container-create-post").style.display = "block";
    }

    function closeModal() {
        document.getElementById("container-create-post").style.display = "none";
    }

    // Fecha o modal ao clicar fora dele
    window.onclick = function (event) {
        const modal = document.getElementById("btnClose");
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
<?php include("blades/followemp.php") ?>
<?php include("blades/menuEmp.php") ?>
<?php include("blades/footercomp.php") ?>