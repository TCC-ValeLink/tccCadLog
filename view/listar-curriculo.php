<?php include("blades/top.php") ?>
<?php include("blades/srcEmp.php") ?>
<div class="body-home">
    <div class="curriculo">
        <div class="compCurriculo">
        <?php Include("../controller/listar-curriculo.php")?>
        <?php Include("../controller/status-vagas.php")?>
        </div>
</div>
<?php include("blades/menuEmp.php") ?>
<?php include("blades/footercomp.php") ?>