<?php Include("blades/top.php");
if(!isset($_SESSION)){
   session_start();
}

if(isset($_POST['btnCadastro2'])){

   $_SESSION['cidade'] = $_POST['CID'];
   $_SESSION['rua'] = $_POST['RUA'];
   $_SESSION['bairro'] = $_POST['BAI'];
   $_SESSION['numero'] = $_POST['NUM'];
   $_SESSION['CEP'] = $_POST['CEP'];
   $_SESSION['referencia'] = $_POST['REF'];
   $_SESSION['tempoRes'] = $_POST['TEM'];
   $_SESSION['valorRes'] = $_POST['VLR'];
   $_SESSION['tipoRes'] = $_POST['TPR'];
   header("Location: cadastro3.php");
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
         <p id="subttl">Endereço</p>
            <form action="" method="POST">
               <p id="lblcd21">Cidade</p>
               <input type="text" class="inputcid" name="CID">
               <p id="lblcd22">Rua</p>
               <input type="text" class="inputrua" name="RUA">

               <p id="lblcd23">Bairro</p>
               <input type="text" class="inputbr" name="BAI">
               <p id="lblcd24">Número</p>
               <input type="text" class="inputnum" name="NUM">
               <p id="lblcd25">CEP</p>
               <input type="text" class="inputcep" name="CEP">

               <p id="lblcd26">Ponto de referencia</p>
               <input type="text" class="inputref" name="REF">
               <p id="lblcd27">Tempo de residencia no municipio</p>   
               <input type="text" class="inputtemp" name="TEM">

               <p id="lblcd28">Valor da Residencia(R$)</p>
               <input type="text" class="inputvlr" name="VLR">
               <p id="lblcd29">Tipo de Residencia</p>
               <input type="text" class="inputtip" name="TPR">

               <button type="submit" name="btnCadastro2" class="btncd2" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 2.4rem; 
               align-items: center; 
               text-align: center;"
               >Próximo Passo</button>
            </form>
   </div>
</div>
<script src="../script.js"></script>

<?php Include("blades/footer3.php")?>
