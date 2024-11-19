<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-home">
    <?php include("../controller/funcao-select-user.php") ?>
    <nav class="nav-user">
        <a>Informações Pessoais</a>
        <a>Endereço</a>
        <a>Outros Dados</a>
        <a>Currículo</a>
        <span></span>
    </nav>
 
   <div class="pessoal-info" id="pessoal-info">
            <form action="" method="POST">
               <p id="lblus1">Nome Completo</p>
               <input type="text" class="inputnameus" name="nome">
               <p id="lblus2">Data de Nascimento</p>
               <input type="date" class="inputdataus" name="data">
 
 
               <p id="lblus3">RG</p>
               <input type="text" class="inputrgus" name="RG">
               <p id="lblus4">CPF</p>
               <input type="text" class="inputcpfus" name="CPF">
               <p id="lblus5">Estado Cívil</p>
               <select class="cmbbxus1" name="Estado_civil">
                    <option value="S">Solteiro</option>
                    <option value="C">Casado</option>
                    <option value="V">Viúvo</option>
                    <option value="SP">Separado</option>
                    <option value="D">Divorciado</option>
                </select>
 
               <p id="lblus6">Possui algum tipo de deficiência?</p>
               <select class="cmbbxus2" name="def">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
               </select>
               <p id="lblus7">Especifique</p>
               <input type="text" class="inputespecus" name="espec">
 
               <p id="lblus8">Sexo</p>
               <input type="radio" name="sex" id="Mas" value="Masculino" class="radious">
               <label for="Mas" class="txt_rd_us">Masculino</label>  
               <input type="radio" name="sex" id="Fem" value="Feminino" class="radio2us">
               <label for="Fem" class="txt_rd2_us">Feminino</label>
               <input type="radio" name="sex" id="Out" value="Outro" class="radio3us">
               <label for="Out" class="txt_rd3_us">Outro</label>
               <input type="radio" name="sex" id="Pre" value="Prefiro não dizer" class="radio4us">
               <label for="Pre" class="txt_rd4_us">Prefiro não dizer</label><br>
 
               <button type="submit" name="btnCadastro" class="btncd" style="    
               background-color:#01E581;
               color: #fff;
               width:15rem;
               height: 3rem;
               border-radius:8px;
               font-size: 2rem;
               display: flex;
               align-items:center;
               justify-content: center;
               margin-top:26rem;
               margin-left: 50rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
            </form>
   </div>
 
   <div class="pessoal-ende" id="pessoal-ende">
        <form action="" method="POST">
               <p id="lblus21">Cidade</p>
               <input type="text" class="inputcidUS" name="CID">
               <p id="lblus22">Rua</p>
               <input type="text" class="inputruaUS" name="RUA">
 
               <p id="lblus23">Bairro</p>
               <input type="text" class="inputbrUS" name="BAI">
               <p id="lblus24">Número</p>
               <input type="text" class="inputnumUS" name="NUM">
               <p id="lblus25">CEP</p>
               <input type="text" class="inputcepUS" name="CEP">
 
               <p id="lblus26">Ponto de referencia</p>
               <input type="text" class="inputrefUS" name="REF">
               <p id="lblus27">Tempo de residencia</p>  
               <input type="text" class="inputtempUS" name="TEM">
 
               <p id="lblus28">Valor da Residencia(R$)</p>
               <input type="text" class="inputvlrUS" name="VLR">
               <p id="lblus29">Tipo de Residencia</p>
               <input type="text" class="inputtipUS" name="TPR">
 
               <button type="submit" name="btnCadastro2" class="btncd2" style="    
               background-color:#01E581;
               color: #fff;
               width:15rem;
               height: 3rem;
               border-radius:8px;
               font-size: 2rem;
               display: flex;
               align-items:center;
               justify-content: center;
               margin-top:19rem;
               margin-left: 27rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
        </form>
   </div>

   <div class="pessoal-outros-dados" id="pessoal-outros-dados">
        <form action="" method="POST">
               <p id="lblus21">Telefone para Contato</p>
               <input type="text" class="inputcidUS" name="CID">
               <p id="lblus22">Telefone para Recado</p>
               <input type="text" class="inputruaUS" name="RUA">
 
               <p id="lblus23">CAD Único</p>
               <input type="text" class="inputbrUS" name="BAI">

               <p id="lblus25">Email</p>
               <input type="text" class="inputemailUS" name="CEP">
 
               <button type="submit" name="btnCadastro2" class="btncd2" style="    
               background-color:#01E581;
               color: #fff;
               width:15rem;
               height: 3rem;
               border-radius:8px;
               font-size: 2rem;
               display: flex;
               align-items:center;
               justify-content: center;
               margin-top:19rem;
               margin-left: 27rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
        </form>
   </div>
 
   <div class="acessar-curriculo" id="acessar-curriculo">
        <div class="eng-cur">
            <i class="bi bi-gear-fill"></i>
        </div>
 
        <p>Configurar seu Curriculo</p>
 
        <button type="submit" name="btnCadastro2" class="btncd2" onclick="funcaoAbrir()" style="    
               background-color:#01E581;
               color: #fff;
               width:22rem;
               height: 5rem;
               border-radius:8px;
               font-size: 2rem;
               display: flex;
               align-items:center;
               justify-content: center;
               margin-top:3rem;
               margin-left: 12rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Criar</button>

               <button type="submit" name="btnCadastro2" class="btncd2" onclick="funcaoAbrir()" style="    
               background-color:#01E581;
               color: #fff;
               width:22rem;
               height: 5rem;
               border-radius:8px;
               font-size: 2rem;
               display: flex;
               align-items:center;
               justify-content: center;
               margin-top:3rem;
               margin-left: 38rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
   </div>
 
   <div id="container-geral" class="container-create-curriculo">
        <form action="../controller/criar-curriculo.php" method="POST">
            <button type="submit" class="btnCloseCur bi bi-x" id="btnClose"
            style="color: lightgreen; font-size: 30px;"></button>
           
            <?php include("../controller/select-top-curriculo.php") ?>
 
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
 
   <script>
 
    const links = document.querySelectorAll('.nav-user a');
    const span = document.querySelector('.nav-user span');
 
    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(link => link.classList.remove('active'));
           
            this.classList.add('active');
        });
    });
 
 
    document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.nav-user a');
    const userUpdates = document.querySelectorAll('.pessoal-info, .pessoal-ende, .pessoal-outros-dados, .acessar-curriculo');
 

    const linkDivMapping = {
        'Informações Pessoais': 'pessoal-info',
        'Endereço': 'pessoal-ende',
        'Outros Dados': 'pessoal-outros-dados',
        'Currículo': 'acessar-curriculo',
    };
 
   
    userUpdates.forEach(div => div.style.display = 'none');
 

    const firstDivId = linkDivMapping['Informações Pessoais'];
    const firstDiv = document.getElementById(firstDivId);
    if (firstDiv) {
        firstDiv.style.display = 'block';
    }
 
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
 
            
            userUpdates.forEach(div => div.style.display = 'none');
 
          
            const targetId = linkDivMapping[link.textContent];
            if (targetId) {
                const targetDiv = document.getElementById(targetId);
                if (targetDiv) {
                    targetDiv.style.display = 'block';
                }
            }
        });
    });
});
 
;
</script>
<script src="../abrir.js"></script>
</div>
<?php Include("blades/followemp.php")?>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>