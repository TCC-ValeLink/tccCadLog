<?php include("blades/top.php") ?>
<?php include("blades/srcEmp.php") ?>
<div class="body-home">
        <?php Include("../controller/funcao-select-emp.php")?>
        <button type="submit" class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoVaga()"><i class="bi bi-briefcase-fill"></i></button>
</div>
<div id="container-create-vagas" class="container-create-vagas">
        <button type="submit" class="btnCloseVaga bi bi-x" id="btnClose"
        style="color: lightgreen; font-size: 30px;"></button>
        <form action="../controller/funcao-create-vaga.php" method="POST" enctype="multipart/form-data">

            <label for="descricao_vagas" class="desclbl">Descrição:</label>
            <textarea name="sobre_vagas" id="sobre_vagas"></textarea>

            <label for="requisitos" class="reqlbl">Pré-requisitos:</label>
            <input type="text" name="pre_requisitos_vagas" id="pre_requisitos_vagas" class="inputCV"></input>

            <label for="carga" class="carlbl">Carga Horária:</label>
            <input type="text" id="carga_horaria_vagas" name="carga_horaria_vagas" class="inputCV2"></input>

            <label for="bene" class="benelbl">Benefícios:</label>
            <input type="text" name="beneficios_vagas" id="beneficios_vagas" class="inputCV3"></input>

            <label for="tip" class="tiplbl">Tipo de vaga:</label>
            <input type="text" id="tipos_vagas" name="tipos_vagas" class="inputCV4"></input>

            <label for="temp" class="templbl">Tempo de Contrato:</label>
            <input type="text" name="tempo_contrato_vagas" id="tempo_contrato_vagas" class="inputCV5"></input>

            <label for="salah" class="sallbl">Salário:</label>
            <input type="text" name="salario_vagas" id="salario_vagas" class="inputCV6"></input>

            <label for="area" class="arealbl">Área:</label>
            <input type="text" placeholder="Design, Mecânica, Marketing, etc." name="area_vagas" class="inputCV7"></input>


            <button class='postarVaga' nome='btnPostar' type='submit'>Criar</button>
        </form>
    </div>
    
<script>
    function funcaoVaga() {
        document.getElementById("container-create-vagas").style.display = "block";
    }

    function closeModal() {
        document.getElementById("container-create-vagas").style.display = "none";
    }

    // Fecha o modal ao clicar fora dele
    window.onclick = function (event) {
        const modal = document.getElementById("btnClose");
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

    <?php include("blades/menuEmp.php") ?>
    <?php include("blades/footercomp.php") ?>