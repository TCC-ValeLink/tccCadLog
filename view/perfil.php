<?php include("blades/top.php") ?>
<?php include("blades/src.php") ?>
<div class="body-home">
    
    <?php include("../controller/funcao-select-user.php") ?>
    <button type="submit" class="btnPost" onclick="funcaoCurriculo()">Criar currículo</button>

<div id="container-create-curriculo" class="container-create-curriculo">
<form action="../controller/create-curriculo.php" method="POST">
<button type="submit" class="btnCloseCur bi bi-x" id="btnClose"
style="color: lightgreen; font-size: 30px;"></button>

    <label for="objetivo"><h2>Objetivo:</h2></label><br>
    <textarea id="objetivo" class="conteudo-curriculo" name="objetivo" required></textarea><br><br>

    <label for="historico" class='cur'><h2>Histórico Profissional:</h2></label><br>
    <textarea id="historico" class="conteudo-curriculo" name="historico" required></textarea><br><br>

    <label for="formacao" class='cur'><h2>Formação Acadêmica:</h2></label><br>
    <textarea id="formacao" class="conteudo-curriculo" name="formacao" required></textarea><br><br>

    <label for="habilidades" class='cur'><h2>Habilidades/Competências:</h2></label><br>
    <textarea id="habilidades" name="habilidades" class="conteudo-curriculo" required></textarea><br><br>
    <input type="submit" class="btnCurriculo" value="Criar Currículo">
</form>
</div>
</div>
<?php include("blades/followemp.php") ?>

<script>
function funcaoCurriculo(){
    document.getElementById("container-create-curriculo").style.display = "block";
}
function closeModal(){
    document.getElementById("container-create-curriculo").style.display = "none";
}
window.onclick = function (event){
    const modal = document.getElementById("btnClose");
    if(event.target == modal) {
        closeModal();
    }
}
</script>
<?php include("blades/menu.php") ?>
<?php include("blades/footercomp.php") ?>