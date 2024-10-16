<?php include("blades/top.php") ?>
<?php include("blades/src.php") ?>
<div class="body-home">

    <?php include("../controller/funcao-select-user.php") ?>
    <button type="submit" class="btnPost" onclick="funcaoCurriculo()">Criar currículo</button>

    <div id="container-create-curriculo" class="container-create-curriculo">
        <form action="../controller/create-curriculo.php" method="POST">
            <button type="submit" class="btnCloseCur bi bi-x" id="btnClose"
                style="color: lightgreen; font-size: 30px;"></button>
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
    usuario.cod_usuario = 5
ORDER BY 
    curriculo.data_criacao_curriculo DESC 
LIMIT 1;");
            while ($exibe = mysqli_fetch_array($query)){
                echo "<div class='top-create-curriculo'>
                <div class='foto-curriculo'><img src='./imgs-foto-perfil-usuario/$exibe[0]' class='foto-curriculo'></div>
                <div class='info-top-curriculo'>
                <h1>$exibe[1] </h1>
                <div class='linha'></div>
                <h4><i class='fas fa-calendar-alt' style='height 20%; width: 10%'></i> $exibe[2] anos</h4>
                <h4><i class='fas fa-home' style='height 20%; width: 12%'></i>$exibe[3]</h4>
                <h4><i class='fas fa-phone' style='height 20%; width: 12%'></i>$exibe[4]</h4>
                <h4><i class='fas fa-envelope'></i>$exibe[5]</h4>
                </div>
                </div>"
                ;
            }  
            
            ?>

            <label for="objetivo">
                <h2>Objetivo:</h2>
            </label><br>
            <textarea id="objetivo" class="conteudo-curriculo" name="objetivo" required></textarea><br><br>

            <label for="historico" class='cur'>
                <h2>Histórico Profissional:</h2>
            </label><br>
            <textarea id="historico" class="conteudo-curriculo" name="historico" required></textarea><br><br>

            <label for="formacao" class='cur'>
                <h2>Formação Acadêmica:</h2>
            </label><br>
            <textarea id="formacao" class="conteudo-curriculo" name="formacao" required></textarea><br><br>

            <label for="habilidades" class='cur'>
                <h2>Habilidades/Competências:</h2>
            </label><br>
            <textarea id="habilidades" name="habilidades" class="conteudo-curriculo" required></textarea><br><br>
            <input type="submit" class="btnCurriculo" value="Criar Currículo">
        </form>
    </div>
</div>
<?php include("blades/followemp.php") ?>

<script>
    function funcaoCurriculo() {
        document.getElementById("container-create-curriculo").style.display = "block";
    }
    function closeModal() {
        document.getElementById("container-create-curriculo").style.display = "none";
    }
    window.onclick = function (event) {
        const modal = document.getElementById("btnClose");
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
<?php include("blades/menu.php") ?>
<?php include("blades/footercomp.php") ?>