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
      <form action="" id="confirmar-senha" method="POST">
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


         <p id="lblcd37">Senha:</p>
         <input type="text" class="inputsen" name="SEN" id="senha">
         <p id="lblcd39">Confirmar senha:</p>
         <input type="text" class="inputcsen" name="SEN2" id="conSenha">
            <span id="message" style="color:red;"></span>

         <button name="btnCadastro3" type="submit" class="btncd3" style="    
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