<?php include("blades/top.php") ?>

<?php

if (!isset($_SESSION)) {
   session_start();
}

if (isset($_POST['btnCadastro3'])) {

   $_SESSION['telefone'] = $_POST['CTT'];
   $_SESSION['Recado'] = $_POST['RCD'];
   $_SESSION['CAD'] = $_POST['CAD'];
   $_SESSION['email'] = $_POST['EMA'];
   $_SESSION['bene'] = $_POST['bene'];
   $_SESSION['senha'] = $_POST['SEN'];
   header("Location: ../controller/funcao-create-user.php");
}
?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5">
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Cadastro</p>
      <div id="linhacd2"></div>
      <div class="triangulo"></div>
      <p id="subttl">Outros dados</p>
      <form action="" method="POST">
         <p id="lblcd31">Telefone para contato</p>
         <input type="text" class="inputctt" name="CTT">
         <p id="lblcd32">Telefone para recado</p>
         <input type="text" class="inputrcd" name="RCD">
         <p id="lblcd34">CAD Único</p>
         <select class="cmbbxcd3" name="CAD">
            <option value="S">Sim</option>
            <option value="N">Não</option>
         </select>
         <p id="lblcd35">Email</p>
         <input type="text" class="inputema" name="EMA">

         <div class="ck1"><input type="checkbox" id="bene1" name="bene[]" value="Bolsa Familia">
            <label for="bene1">Bolsa Familia</label>
         </div>
         <div class="ck2"><input type="checkbox" id="bene2" name="bene[]" value="Renda Cidadã">
            <label for="bene2">Renda Cidadã</label>
         </div>
         <div class="ck3"><input type="checkbox" id="bene3" name="bene[]" value="Aposentadoria">
            <label for="bene3">Aposentadoria</label>
         </div>
         <div class="ck4"><input type="checkbox" id="bene4" name="bene[]" value="BPC">
            <label for="bene4">BPC</label>
         </div>
         <div class="ck5"><input type="checkbox" id="bene5" name="bene[]" value="Pensão">
            <label for="bene5">Pensão</label>
         </div>
         <div class="ck6"><input type="checkbox" id="bene6" name="bene[]" value="Outros">
            <label for="bene6">Outros</label>
         </div>
         <div class="ck7"><input type="checkbox" id="bene7" name="bene[]" value="Nenhum">
            <label for="bene7">Nenhum</label>
         </div>


         <p id="lblcd37">Senha:</p>
         <input type="text" class="inputsen" name="SEN">
         <p id="lblcd39">Confirmar senha:</p>
         <input type="text" class="inputcsen" name="SEN2">

         <button name="btnCadastro3" type="submit" class="btncd2" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 2.4rem; 
               align-items: center; 
               text-align: center;">Finalizar</button>
      </form>
   </div>
</div>
<script src="../script.js"></script>

<?php include("blades/footer4.php") ?>